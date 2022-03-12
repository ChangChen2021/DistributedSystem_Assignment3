<?php
if(empty($name))
    {
    	header("Location: ../../updatexml.php?error=emptyName&position=$position&degree=$degree&birthday=$birthday&phone=$phone&description=$description");
    	exit();
    }else if(empty($position)){
    	header("Location: ../../updatexml.php?error=emptyPosition&name=$name&degree=$degree&birthday=$birthday&phone=$phone&description=$description");
    	exit();
    }else if(empty($degree)){
    	header("Location: ../../updatexml.php?error=emptyDegree&position=$position&name=$name&birthday=$birthday&phone=$phone&description=$description");
    	exit();
    }else if(empty($birthday)){
    	header("Location: ../../updatexml.php?error=emptyBirthday&position=$position&name=$name&degree=$degree&phone=$phone&description=$description");
    	exit();
    }else if(empty($phone)){
    	header("Location: ../../updatexml.php?error=emptyPhone&position=$position&name=$name&degree=$degree&birthday=$birthday&description=$description");
    	exit();
    }else if(empty($description)){
    	header("Location: ../../updatexml.php?error=emptyDescription&position=$position&name=$name&degree=$degree&birthday=$birthday&phone=$phone");
    	exit();
    }