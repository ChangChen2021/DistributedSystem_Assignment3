<?php
// written by Chang
  if(isset($_POST["reset-request-submit"])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    //the link to reset password page
    $url = "localhost/Assignment3/login/forgottenpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    //change reset password url expire time here
    $expires = date("U") + 1200;
    require '../../includes/dbh.inc.php';
    $userEmail = $_POST["email"];
    //overwrite the valid url to protect security, delete any sort of entity in the DB include the specific user
    $sql = "DELETE FROM pwdReset where pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    //prepare to check whether get ready
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "There was an error!";
      exit();
    } else {
      //execute the sql statement
      mysqli_stmt_bind_param($stmt, "s", $userEmail);
      mysqli_stmt_execute($stmt);
    }
    //insert toke inside DB
    $sql = "INSERT INTO pwdReset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "There was an error!";
      exit();
    } else {
      //hash the token for security
      $hashedToken = password_hash($token, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
      mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    //Write an email to user email address
    $to = $userEmail;
    $subject = 'Reset your password';

    $message = "<p>We received a password reset request. The link to reset your password is below.</p>";
    $message .='<p>Here is your password reset link: </br>';
    $message .='<a href="'.$url.'">'.$url.'</a></p>';

    $headers = "From: Chang <chang.2021.chen@gmail.com>\r\n";
    $headers .= "Reply-To: chang.2021.chen@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";
    //send the email
    mail($to, $subject, $message,  $headers);
    header("Location: ../reset-password.php?reset=success");
  }else{
    header("Location: ../../login/login.php");

  }