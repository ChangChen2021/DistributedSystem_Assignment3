<?php
// written by Chang
if(isset($_POST["reset-password-submit"])){
  $selector = $_POST["selector"];
  $validator = $_POST["validator"];
  $password = $_POST["pwd"];
  $passwordRepeat = $_POST["pwd-repeat"];
  //check whether user enter a valid new password 
  if(empty($password) || empty($passwordRepeat)) {
    header("Location: ../create-new-password.php?newpwd=empty");
    exit();
  } else if($password!=$passwordRepeat){
    header("Location: ../create-new-password.php?newpwd=pwdnotsame");
    exit();
  }
  //check whether the time is expired or not
  require '../../includes/dbh.inc.php';
  $currentDate = date("U");
  $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "There was an error1!";
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
    mysqli_stmt_execute($stmt);
    // grab result
    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)){
      echo "You need to re-submit your reset request.";
      exit();
    }else{
      //check whether the tokens are the same
      $tokenBin = hex2bin($validator);
      $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
      if($tokenCheck === false){
        echo "You need to re-submit your reset request.";
        exit();
      }else if ($tokenCheck === true){
        //select data whose email address should be changed
        $tokenEmail = $row['pwdResetEmail'];
        $sql = "SELECT * FROM users WHERE usersEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          echo "There was an error 2!";
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if(!$row = mysqli_fetch_assoc($result)){
            echo "There was an error 3 : You didn't register this email!";
            exit();
          }else{
            //change the password
            $sql = "UPDATE users SET usersPwd=? WHERE usersEmail=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
              echo "There was an error 4!";
              exit();
            } else {
              $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
              mysqli_stmt_execute($stmt);
              //delete the data in table pwdReset
              $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "There was an error 3!";
                exit();
              } else {
                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                mysqli_stmt_execute($stmt);
                header("Location: ../../login.php?newpwd=passwordupdated");
              }
            }
          }
        }
      }
    }
  }
}else{
  header("Location: ../../login.php");
}