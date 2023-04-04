<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kids Game|Modify Password</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


	<h2 class="text-center">Password Modification</h2>
	<form class="container" method="POST" action="resetModification.php">
		<div class="mb-3">
			<label for="inputUsername" class="form-label">Existing Username</label>
			<input type="text" class="form-control" id="inputUsername" name="inputUsername">
       	</div>
        <div class="mb-3">
			<label for="inputPassword" class="form-label">New Password</label>
			<input type="Password" class="form-control" id="inputPassword" name="inputPassword">
        </div>
        <div class="mb-3">
			<label for="inputConfirmPassword" class="form-label">Confirm New Password</label>
			<input type="password" class="form-control" id="inputConfirmPassword" name="inputConfirmPassword">
        </div>
		
		<button type="submit" class="btn btn-primary" name="modifyBtn" id="createBtn">Modify</button>
		<a href="index.php"><button type="button" class="btn btn-primary" name="signUpBtn" id="signUpBtn"> SignUp</button></a>
			
			
			<div class="error-message">
				
			</div>
		</form>
	
	</div>
</body>
</html>