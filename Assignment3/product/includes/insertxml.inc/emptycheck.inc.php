<?php
//Written by Shuzheng Wang
if(empty($name))
{
  header("Location: ../../insertxml.php?error=emptyName&position=$position&degree=$degree&birthday=$birthday&phone=$phone&description=$description");
  exit();
}else if(empty($position)){
  header("Location: ../../insertxml.php?error=emptyPosition&name=$name&degree=$degree&birthday=$birthday&phone=$phone&description=$description");
  exit();
}else if(empty($degree)){
  header("Location: ../../insertxml.php?error=emptyDegree&position=$position&name=$name&birthday=$birthday&phone=$phone&description=$description");
  exit();
}else if(empty($birthday)){
  header("Location: ../../insertxml.php?error=emptyBirthday&position=$position&name=$name&degree=$degree&phone=$phone&description=$description");
  exit();
}else if(empty($phone)){
  header("Location: ../../insertxml.php?error=emptyPhone&position=$position&name=$name&degree=$degree&birthday=$birthday&description=$description");
  exit();
}else if(empty($description)){
  header("Location: ../../insertxml.php?error=emptyDescription&position=$position&name=$name&degree=$degree&birthday=$birthday&phone=$phone");
  exit();
}