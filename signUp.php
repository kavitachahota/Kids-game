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
	?>

	<h2 class="text-center">Sign Up</h2>
	<form class="container" method="POST" action="signupResult.php">
		<div class="mb-3">
			<label for="inputFirstName" class="form-label">First Name</label>
			<input type="text" class="form-control" id="inputFirstName" name="inputFirstName">
		</div>
		<div class="mb-3">
			<label for="inputLastName" class="form-label">Last Name</label>
			<input type="text" class="form-control" id="inputLastName" name="inputLastName">
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


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>