<?php
	//written by Chang Chen
	include_once 'header.php';
	session_start();
	//decide whether to create an employee account or manager account
	if(isset($_GET['userType'])){
		$_SESSION["userType"]=$_GET['userType'];
	}
?>
	<div class="container" id="container">
		<!-- create account -->
		<div class="form-container sign-up-container">
			<form action="./includes/signup.inc.php" method="post">
				<h1>Create Account</h1>
				<input type="text" name="name" placeholder="Name" />
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="pwd" placeholder="Password" />
				<input type="password" name="pwdrepeat" placeholder="Repeat password" />
				<input type="hidden" name="userType" value= <?php echo $_SESSION["userType"];?> />
				<?php
					//error handling
					require "./includes/errorhandling_signup.inc.php";
				?>
				<button type="sumbmit" name="submit">Sign Up</button>
			</form>
		</div>
		<!-- sign in the account -->
		<div class="form-container sign-in-container">
			<form action="./includes/signin.inc.php" method="post">
				<h1>Sign in</h1>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="pwd" placeholder="Password" />
				<?php
				//error handling
				require "./includes/errorhandling_signin.inc.php";
				?>
				<!-- reset password -->
				<?php
					if(isset($_GET["newpwd"])){
						if($_GET["newpwd"] == "passwordupdated"){
							echo "<p class='signupsuccess'>Your password has been reset!</p>";
						}
					}
				?>
				<a href="./forgottenpwd/reset-password.php">Forgot your password?</a>
				<button type="sumbmit" name="submit">Sign In</button>
			</form>
		</div>
		<!-- overlay, which inform the user what to type in -->
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script type='text/javascript' src='script.js'></script>
<?php
	include_once 'footer.php';
	//use flag to decide whether to display signin or signup
	if($_SESSION['flag'] == '1'){
		echo "<script>document.getElementById('container').classList.add('right-panel-active')</script>";	
	}else if($_SESSION['flag'] == '0'){
		echo "<script>document.getElementById('container').classList.remove('right-panel-active')</script>";	
	}
?>