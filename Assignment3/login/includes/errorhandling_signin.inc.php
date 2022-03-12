<?php
  //Written by Chang Chen
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput2"){
      echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Fill in all fields! </p>";
    }
    else if ($_GET["error"] == "wrongsignin"){
      echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Invalid login! </p>";
    }
    else if ($_GET["error"] == "none"){
      echo "<p style='color:#000000; text-transform: uppercase; font-weight: bold; font-size: 20'>You have signed up! </p>";	
    }
  }