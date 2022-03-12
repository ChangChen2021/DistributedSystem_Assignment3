<?php
//Written by Chang Chen
// check whether inputs are empty when signing up
function emptyInputSignUp($name, $email, $pwd, $pwdRepeat, $userType) {
  $result;
  if(empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat) || empty($userType)){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}
//check whether the email is valid
function invalidEmail($email) {
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}
//check whether the passwords are the same
function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if($pwd !== $pwdRepeat){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}
//check whether the email has already been registered
function emailExists($conn, $email)  {
  $sql = "SELECT * FROM users WHERE usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../login.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }else{
    $result = false;
    return $result;
  }
  
  mysqli_stmt_close($stmt);
}
//create a user in the database
function createUser($conn, $name, $email, $pwd, $userType)  {
  $sql = "INSERT INTO users (usersName, usersEmail, usersPwd, usersType) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../login.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $userType);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  $_SESSION["flag"]="0";
  header("location: ../login.php?error=none");
  exit();
}
//check whether the sign in information is empty
function emptyInputSignIn($email, $pwd) {
  $result;
  if(empty($email) || empty($pwd)){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}
//sign in
function signinUser($conn, $email, $pwd){
  $emailExists = emailExists($conn, $email);
  if($emailExists == false){
    header("location: ../login.php?error=wrongsignin");
    exit();
  }

  $pwdHashed = $emailExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  
  if($checkPwd == false){
    header("location: ../login.php?error=wrongsignin");
    exit();
  }else if($checkPwd == true){
    $_SESSION["userId"] = $emailExists["usersId"];
    $_SESSION["userEmail"] = $emailExists["usersEmail"];
    $userType= $emailExists["usersType"];
    if($userType =='employee'){
      header("location: ../../product/insertxml.php");
      exit();
    }else if($userType =='boss'){
      header("location: ../../product/mainPage.php");
      exit();
    }
  }
}