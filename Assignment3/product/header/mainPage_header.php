<html>
<head>
	<title>GWC Manager 2021</title>
	<meta charset="UTF-8">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="main">
		<!-- the navigation bar -->
		<header>
			<div class="logo">
				<img src='../asset/picture/logo.png'>
			</div>
			<nav>
				<ul>					
					<li><a href="mainPage.php">Gallery</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="../welcome/mainPage.php">Log Out</a></li>  
				</ul>
			</nav>	
		</header>
		<!-- search condition bar -->
		<div class="navbar_bg">
			<form method="post">
			<div class="navbar">
				<ul class="list_one">
					<li class="content_one">
						<h1 href="#">Position</h1>
						<ul class="list_two">
							<li class="content_two">
								<input type="submit" name= "javaDeveloper" value="javaDeveloper">
							</li>
							<li class="content_two">
								<input type="submit" name= "pythonDeveloper" value="pythonDeveloper">					
							</li>
							<li class="content_two">
								<input type="submit" name= "phpDeveloper" value="phpDeveloper">	
							</li>
							<li class="content_two">
								<input type="submit" name= "htmlDeveloper" value="htmlDeveloper">
							</li>
						</ul>
					</li>
					<li class="content_one">
						<h1 href="#">Degree</h1>
						<ul class="list_two">
							<li class="content_two">
								<input type="submit" name= "Bachelor" value="Bachelor">
							</li>
							<li class="content_two">
								<input type="submit" name= "Master" value="Master">
							</li>
							<li class="content_two">
								<input type="submit" name= "Doctor" value="Doctor">
							</li>
						</ul>
					</li>
				
					<form method = "POST">
						<input type="text" name="search" placeholder="Search Employee" />
						<button type="submit" name="submit-search">Submit</button>
					</form>
					
				</ul>
			</div>
			</form>
		</div>
