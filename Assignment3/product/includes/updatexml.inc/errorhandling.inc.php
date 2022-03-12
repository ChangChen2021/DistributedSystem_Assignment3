<?php
if(!isset($_GET['error'])){
  exit();
}else{
  $errorCheck=$_GET['error'];
  if($errorCheck == 'emptyName'){
      echo "<p class='error'>Error: You did not fill the name!</p>"; 
      exit();
  }if($errorCheck == 'emptyBirthday'){
      echo "<p class='error'>Error: You did not fill the birthday!</p>";
      exit();
  }if($errorCheck == 'emptyPosition'){
      echo "<p class='error'>Error: You did not select the position!</p>";
      exit();
  }if($errorCheck == 'emptyDegree'){
      echo "<p class='error'>Error: You did not select the the degree!</p>";
      exit();
  }if($errorCheck == 'emptyPhone'){
      echo "<p class='error'>Error: You did not fill the phone!</p>";
      exit();
  }if($errorCheck == 'emptyDescription'){
    echo "<p class='error'>Error: You did not fill the description!</p>";
    exit();
  }if($errorCheck == 'dataCreated'){
    echo "<p class='success'>You have successfully created a piece of data!</p>";
    exit();
  }else if($errorCheck == 'success'){
      echo "<p class='success'>You have successfully updated a piece of data!</p>";
      exit();
  }
}	   