<?php
	// Turn off all error reporting
	error_reporting(0);
	session_start();
	$userId = $_SESSION["userId"];
	//check the status of the page, and decide which info to display
	if(!isset($_GET['error']) || $_GET['error'] == 'success' || $_GET['error'] == 'dataCreated'){
		include './classes/model.php';
		$model= new Model();
		$sql=$model->getPeopleInfo($userId);
		foreach ($sql as $n){ 
			$name= $n['name'];
			$image= $n['image'];
			$position= $n['position'];
			$degree= $n['degree'];
			$phone= $n['phone'];
			$description= $n['description'];
			$birthday= $n['birthday'];
		}
	}else{
		//get data from the url, to let user not input again
		$name= $_GET["name"];
		$image= $_GET["image"];
		$position= $_GET["position"];
		$degree= $_GET["degree"];
		$birthday= $_GET["birthday"];
		$phone = $_GET["phone"];
		$description = $_GET["description"];
	}
?>
<html>
<!-- Written by Shuzheng Wang -->
	<head>
    	<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="style/CRUD_style.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<body>
		<div class="wrapper">
			<div class="title">
				Edit the Profile
			</div>
    		<form method = "POST" action="./includes/updatexml.inc/updatexml.inc.php">
    			<div class="input_field">
    				<label>Name:</label>
        			<input type="text" name="name" <?php echo "value= $name";?> >
    			</div>
    			<div class="input_field">
    				<label>Image:</label>
                	<input type="text" name="image" <?php echo "value= $image";?>>           
    			</div>
    			<div class="input_field">
    				<label>Birthday:</label>
        			<input type="text" name="birthday" <?php echo "value= $birthday";?> >
    			</div>
    			<div class="input_field">
    				<label>Position:</label>
    				<div class="custom_select">
    					<select name="position">
								<option value="javaDeveloper"<?php if($position == "javaDeveloper"){echo "selected='selected'";}?>>JavaDeveloper</option>
    						<option value="pythonDeveloper"<?php if($position == "pythonDeveloper"){echo "selected='selected'";}?>>PythonDeveloper</option>
    						<option value="phpDeveloper"<?php if($position == "phpDeveloper"){echo "selected='selected'";}?>>PhpDeveloper</option>
    						<option value="htmlDeveloper"<?php if($position == "htmlDeveloper"){echo "selected='selected'";}?>>HtmlDeveloper</option>
    					</select>
    				</div>
    			</div>
    			<div class="input_field">
    				<label>Degree:</label>
    				<div class="custom_select">
    				<select name="degree">
    						<option value="Bachelor"<?php if($degree == "Bachelor"){echo "selected='selected'";}?>>Bachelor</option>
    						<option value="Master"<?php if($degree == "Master"){echo "selected='selected'";}?>>Master</option>
    						<option value="Doctor"<?php if($degree == "Doctor"){echo "selected='selected'";}?>>Doctor</option>
    					</select>
    				</div>
    			</div>
    			<div class="input_field">
    				<label>Phone:</label>
        			<input type="text" name="phone" <?php echo "value= $phone";?> >
    			</div>
    			<div class="input_field">
    				<label>Description:</label>
        			<input type="text" name="description" <?php echo "value= $description";?> >
    			</div>
    			<div class="input_field">
        			<input type="submit" name= "insert" value="Submit" class="btn">
    			</div>
    			<div class="input_field">
    				<input type="submit" name= "delete" value="Delete" onclick="return confirm('Are you sure?')" class="btn">
    			</div>
    			<div class="input_field">
    				<input type="submit" name= "overview" value="Overview" class="btn">
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
		    //for error detect and feedback giving
			 	require "./includes/updatexml.inc/errorhandling.inc.php";
    	?>	
		</div>
	</body>
</html>