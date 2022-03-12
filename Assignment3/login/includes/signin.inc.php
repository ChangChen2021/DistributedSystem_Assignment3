<?php
//Written by Chang Chen
// for the sign in form 
if(isset($_POST["submit"])){
  
  $email=$_POST["email"];
  $pwd=$_POST["pwd"];
  
  session_start();
  $_SESSION['flag'] = '0';

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
  //tell the error
  if(emptyInputSignIn($email, $pwd) !== false){
    header("location: ../login.php?error=emptyinput2");
    exit();
  }
  //sign in 
  signinUser($conn, $email, $pwd);
}
else{
  header("location: ../login.php");
  exit();
}