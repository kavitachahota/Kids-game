<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<?php
		include "navBar.php";
		include "connect.php";
		include "functions.php";

		session_start();

		if(isset($_POST["signInBtn"])){
			$username = $_POST["inputUsername"];
			$password = $_POST["inputPassword"];

			if($username == ""){
				echo "<script>alert(\"" . getErrorMessages("no-username") . "\")</script>";
			}
			elseif($password == ""){
				echo "<script>alert(\"" . getErrorMessages("no-pass") . "\")</script>";
			}
			else{
				$sql = "SELECT * FROM player p JOIN authenticator a ON p.registrationOrder = a.registrationOrder WHERE userName=\"$username\" AND passCode=\"$password\"";

				$result = $connection->query($sql);

				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$_SESSION["player_id"] = $row["registrationOrder"];
					header('Location: level1.php');
				}
				else{
					echo "<script>alert(\"Invalid username or password.\")</script>";
				}
				
			}
		}

		$connection->close();

	?>

	<h2 class="text-center">Sign-In</h2>
	<form class="container" method="POST" action="#">
		<div class="mb-3">
			<label for="inputUsername" class="form-label">Username</label>
			<input type="text" class="form-control" id="inputUsername" name="inputUsername">
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="form-label">Password</label>
			<input type="password" class="form-control" id="inputPassword" name="inputPassword">
		</div>
		<button type="submit" class="btn btn-primary" name="signInBtn" id="signInBtn">Sign-In</button>
		<a href="signup.php"><button type="button" class="btn btn-primary" name="signUpBtn" id="signUpBtn"> Sign-Up</button></a>
	</form>


	<?php

		include "footer.php";
	?>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
