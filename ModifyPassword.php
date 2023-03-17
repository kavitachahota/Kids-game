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
</body>
</html>