<?php
//give search condition keywords
if(isset($_POST['javaDeveloper'])){
  header("Location: ../product/mainPage.php?search=javaDeveloper");
  exit();
}
if(isset($_POST['pythonDeveloper'])){
  header("Location: ../product/mainPage.php?search=pythonDeveloper");
  exit();
}
if(isset($_POST['phpDeveloper'])){
  header("Location: ../product/mainPage.php?search=phpDeveloper");
  exit();
}
if(isset($_POST['htmlDeveloper'])){
  header("Location: ../product/mainPage.php?search=htmlDeveloper");
  exit();
}
if(isset($_POST['Bachelor'])){
  header("Location: ../product/mainPage.php?search=Bachelor");
  exit();
}
if(isset($_POST['Master'])){
header("Location: ../product/mainPage.php?search=Master");
exit();
}
if(isset($_POST['Doctor'])){
header("Location: ../product/mainPage.php?search=Doctor");
exit();
}if(isset($_POST['submit-search'])){  
  //get data from the form
  $search= $_POST["search"];
  header("Location: ../product/mainPage.php?search=$search");
  exit();
}