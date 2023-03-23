<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

	<?php
		include "navBar.php";
		include "connect.php";
		include "functions.php";
	?>

	<h2 class="text-center">Sign Up</h2>
	<form class="container" method="POST" action="#">
		<div class="mb-3">
			<label for="inputFirstName" class="form-label">First Name</label>
			<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" value="">
		</div>
		<div class="mb-3">
			<label for="inputLastName" class="form-label">Last Name</label>
			<input type="text" class="form-control" id="inputLastName" name="inputLastName" value="">
		</div>
		<div class="mb-3">
			<label for="inputUsername" class="form-label">Username</label>
			<input type="text" class="form-control" id="inputUsername" name="inputUsername">
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="form-label">Password</label>
			<input type="password" class="form-control" id="inputPassword" name="inputPassword">
		</div>
		<div class="mb-3">
			<label for="inputConfirmPassword" class="form-label">Confirm Password</label>
			<input type="password" class="form-control" id="inputConfirmPassword" name="inputConfirmPassword">
		</div>
		<button type="submit" class="btn btn-primary" name="createBtn" id="createBtn">Create</button>
		<a href="index.php"><button type="button" class="btn btn-primary" name="signInBtn" id="signInBtn"> Sign-In</button></a>
	</form>


	<?php

		if(isset($_POST["createBtn"])){
			$inputFirstName = $_POST["inputFirstName"];
			$inputLastName = $_POST["inputLastName"];
			$inputUsername = $_POST["inputUsername"];
			$inputPassword = $_POST["inputPassword"];
			$inputConfirmPassword = $_POST["inputConfirmPassword"];

			// is empty
			if($inputFirstName == ""){
				echo "<script>alert(\"" . getErrorMessages("no-first-name") . "\")</script>";
			}
			elseif($inputLastName == ""){
				echo getErrorMessages("no-last-name");
			}
			elseif($inputUsername == ""){
				echo getErrorMessages("no-username");
			}
			elseif($inputPassword == ""){
				echo getErrorMessages("no-pass");
			}
			elseif($inputConfirmPassword == ""){
				echo getErrorMessages("no-confirm-pass");
			}
			else{
				// check username exist
				if(checkUsername($inputUsername, $connection)){
					echo getErrorMessages("username-exist");
				}
				else{
					// password and confirm password
					if(matchPassword($inputPassword, $inputConfirmPassword)){
						// ok
						$sql = "INSERT INTO player (fName, lName, userName, registrationTime, registrationOrder) VALUES (\"$inputFirstName\", \"$inputLastName\", \"$inputUsername\", CURRENT_TIMESTAMP, NULL)";
						
						if($connection->query($sql)  === TRUE){
							$last_id = mysqli_insert_id($connection); # getting last auto increament id
							
							$sql = "INSERT INTO authenticator(passCode, registrationOrder) VALUES (\"$inputPassword\", $last_id)";
							if($connection->query($sql)){
								echo "Added successfully";
							}
							else{
								echo "error while adding to authenticator";
							}
						}
						else{
							echo "error while adding to player";
							echo "Error: " . $sql . "<br>" . $connection->error;
						}
					}
					else{
						echo getErrorMessages("no-same-pass");
					}
				}
			}
		}

		$connection->close();

		include "footer.php";
	?>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>