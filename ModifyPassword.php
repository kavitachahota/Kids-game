<!DOCTYPE html>
<html>
<head>
    <title>Password Modification Form</title>
</head>
<body>
    <h1>Password Modification Form</h1>
    <form method="POST" action="modify_password.php">
        <div>
            <label for="username">Existing Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <button type="submit" name="modify">Modify</button>
    </form>
    <form method="POST" action="login.php">
        <button type="submit" name="signin">Sign-In</button>
    </form>


	<?php
		if(isset($_POST['modify'])) {
			$existing_username = $_POST['existing-username'];
			$new_password = $_POST['new-password'];
			$confirm_new_password = $_POST['confirm-new-password'];

			// Perform password modification logic here.

			echo "Password modified successfully!";
		}
		elseif(isset($_POST['sign-in'])) {

			// Redirect to the login form.
			header("Location: login.php");
			exit();
		}
	?>
	
</body>
</html>