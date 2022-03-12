<?php
//Written by Chang Chen
// for the sign up form 
if (isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  $userType = $_POST["userType"];

  session_start();
  $_SESSION['flag'] = '1';
  
  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
  //tell the error
  if(emptyInputSignUp($name, $email, $pwd, $pwdRepeat, $userType) !== false){
    header("location: ../login.php?error=emptyinput1");
    exit();
  }
  if(invalidEmail($email) !== false){
    header("location: ../login.php?error=invalidemail");
    exit();
  }
  if(pwdMatch($pwd, $pwdRepeat) !== false){
    header("location: ../login.php?error=passwordsdontmatch");
    exit();
  }
  if(emailExists($conn, $email) !== false){
    header("location: ../login.php?error=emailtaken");
    exit();
  }
  //create an user
  createUser($conn, $name, $email, $pwd, $userType);
}
else{
  header("location: ../login.php");
  exit();
}