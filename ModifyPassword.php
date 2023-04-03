<!DOCTYPE html>
<html>
<head>
	<title>Password Modification Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
</head>
<body>

	
		<form method="post" action="resetModification.php">
			
			<label for="username">Existing Username:</label>
			<input type="text" id="username" name="username" required>
			
			<label for="password">New Password:</label>
			<input type="password" id="password" name="password" required>
			
			<label for="confirm_password">Confirm New Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" required>
			<p>Password must meet the following requirements:</p>
		<ul>
			<li>At least 8 characters long</li>
			<li>Includes at least one uppercase letter</li>
			<li>Includes at least one lowercase letter</li>
			<li>Includes at least one number</li>
			<li>Includes at least one special character (@#$%^&amp;*)</li>
		</ul>
			<input type="submit" name="modify" value="Modify">
			<a href="SignIn.php"><input type="button" value="signIn"></a>
			
			
			<div class="error-message">
				
			</div>
		</form>
	
	</div>
</body>
</html>