<?php 
	//Restructed by Shuzheng Wang from Assignment2, redesigned View by Mingzhe Gu, and OOP reformed by Chang Chen
	//check whether the profile has been created
	session_start();
	$userId = $_SESSION['userId'];
	include './classes/model.php';
	$model= new Model();
	$sql=$model->getPeopleInfo($userId);
	if($sql->num_rows>0){
		header("Location: ./updatexml.php");
		exit();	
	}
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/CRUD_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- BOX WRAPPER -->
    <div class="wrapper">
        <!-- HEAD TITLE -->
        <div class="title">
            Create My Profile
		</div>
		<!-- INFORMATION TO FILL IN -->
        <form method="POST" action='./includes/insertxml.inc/insertxml.inc.php'>
            <div class="input_field">
                <label>Name:</label>
                <?php 
        			if(isset($_GET['name'])){
        			    $name=$_GET['name'];
        			     echo '<input type="text" name="name" value="'.$name.'">';
        			}else{
        			     echo '<input type="text" name="name">';
        			}
    			?>
            </div>
            <div class="input_field">
                <label>Image:</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="input_field">
                <label>Birthday:</label>
                <?php 
        			if(isset($_GET['birthday'])){
        				$birthday=$_GET['birthday'];
        				echo '<input type="text" name="birthday" value="'.$birthday.'">';
        			}else{
        			     echo '<input type="text" name="birthday">';
        			}
    			?>
            </div>
            <div class="input_field">
				<!-- CHOOSE FROM THE GIVEN CHOICES -->
                <label>Position:</label>
                <div class="custom_select">
                    <select name="position">
                        <?php $position=$_GET['position']?>
                        <option value="" <?php if($position == null){echo "selected='selected'";}?>></option>
                        <option value="javaDeveloper"
                            <?php if($position == "javaDeveloper"){echo "selected='selected'";}?>>JavaDeveloper</option>
                        <option value="pythonDeveloper"
                            <?php if($position == "pythonDeveloper"){echo "selected='selected'";}?>>PythonDeveloper
                        </option>
                        <option value="phpDeveloper"
                            <?php if($position == "phpDeveloper"){echo "selected='selected'";}?>>PhpDeveloper</option>
                        <option value="htmlDeveloper"
                            <?php if($position == "htmlDeveloper"){echo "selected='selected'";}?>>HtmlDeveloper</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
				<!-- CHOOSE FROM THE GIVEN CHOICES -->
                <label>Degree:</label>
                <div class="custom_select">
                    <select name="degree">
                        <?php $degree=$_GET['degree']?>
                        <option value="" <?php if($degree == null){echo "selected='selected'";}?>></option>
                        <option value="Bachelor" <?php if($degree == "Bachelor"){echo "selected='selected'";}?>>Bachelor
                        </option>
                        <option value="Master" <?php if($degree == "Master"){echo "selected='selected'";}?>>Master
                        </option>
                        <option value="Doctor" <?php if($degree == "Doctor"){echo "selected='selected'";}?>>Doctor
                        </option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label>Phone:</label>
                <?php 
        			if(isset($_GET['phone'])){
        				$phone=$_GET['phone'];
        				echo '<input type="text" name="phone" value="'.$phone.'">';
        			}else{
        			     echo '<input type="text" name="phone">';
        			}
    			?>
            </div>
            <div class="input_field">
                <label>Description:</label>
                <?php 
        			if(isset($_GET['description'])){
        				$description=$_GET['description'];
        				echo '<input type="text" name="description" value="'.$description.'">';
        			}else{
        			     echo '<input type="text" name="description">';
        			}
    			?>
            </div>
            <div class="input_field">
                <input type="submit" name="insert" value="Submit" class="btn">
            </div>
        </form>
        <!-- go back button -->
        <div class="backButton">
            <a href="../welcome/mainPage.php"><i onclick="goBack()" class="fa fa-sign-out" id="back"></i></a>
            <script>
            function goBack() {
                return confirm('Are you sure to sign out?');
            }
            </script>
            <style>
            #back {
                position: fixed;
                top: 3%;
                right: 6%;
                color: whitesmoke;
                font-size: 4em;
            }
            </style>
        </div>
        <?php
				require './includes/insertxml.inc/errorhandling.inc.php';
			?>
    </div>
</body>

</html>