<!DOCTYPE html>
<html>
<head>
	//
	<title>Login Form</title>
</head>
<body>
	<h2>Login</h2>
	<?php
		session_start();

		if (isset($_POST['connect'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			// Check if the username and password are correct
			// (need to replace this with code that checks the database)
			if ($username === 'admin' && $password === 'password') {
				// Start the session
				$_SESSION['username'] = $username;

				// Redirect to the first level game
				header('Location: first-level-game.php');
				exit;
			} else {
				// Display an error message
				echo "Sorry, you entered a wrong username!<br>";
				echo "<a href='reset-password.php'>Forgotten? Please, change your password</a>";
			}
		}

		if (isset($_POST['signup'])) {
			// Redirect to the registration form
			header('Location: signUp.php');
			exit;
		}
	?>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Connect" name="connect">
		<input type="submit" value="SignUp" name="signup">
	</form>
</body>
</html>

