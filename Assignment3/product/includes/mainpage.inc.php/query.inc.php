<?php
//filter function
if(!isset($_GET['search'])){
	$parameter_slide = mysqli_query($conn, "SELECT * FROM peopleInformation"); 
}else{
		$condition = $_GET['search'];
    switch ($condition){
        case 'javaDeveloper': 
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE position = 'javaDeveloper'");
          break;
        case 'pythonDeveloper':
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE position = 'pythonDeveloper'");
        	break;
        case 'phpDeveloper':
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE position = 'phpDeveloper'");
        	break;
        case 'htmlDeveloper':
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE position = 'htmlDeveloper'");
        	break;
        case 'Bachelor':
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE degree = 'Bachelor'");
        	break;
        case 'Master':
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE degree = 'Master'");
        	break;
        case 'Doctor':
        	$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE degree = 'Doctor'");
					break;
				default:
					$parameter = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE name LIKE '%$condition%'");
					break;
		}
}			