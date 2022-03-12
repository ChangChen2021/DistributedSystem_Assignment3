<?php
//Written by Chang Chen
// error handling
					if(isset($_GET["error"])){
						if($_GET["error"] == "emptyinput1"){
							echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Fill in all fields! </p>";
						}
						else if ($_GET["error"] == "invalidemail"){
							echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Choose a proper email! </p>";
						}
						else if ($_GET["error"] == "passwordsdontmatch"){
							echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Passwords don't match! </p>";
						}
						else if ($_GET["error"] == "emailtaken"){
							echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Email has been taken! </p>";
						}
						else if ($_GET["error"] == "stmtfailed"){
							echo "<p style='color:#FF6701; text-transform: uppercase; font-weight: bold; font-size: 20'>Something went wrong, try again! </p>";
						}
					}
					