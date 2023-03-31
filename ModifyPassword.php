<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Modication</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <?php
        
        include 'connect.php';
        include 'functions.php';
        include "navBar.php";
    ?>
    

<form class="container" method="POST" action="resetModification.php">

    <div class="mb-3">
			<label for="username" class="form-label">Existing Username</label>
			<input type="text" class="form-control" id="username" name="username">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label"> New Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<div class="mb-3">
			<label for="confirm_password" class="form-label">Confirm New Password</label>
			<input type="password" class="form-control" id="confirm_password" name="confirm_password">
		</div>
		<button type="submit" class="btn btn-primary" name="modifyPassword" id="createBtn">Modify</button>
        <a href="signIn.php"><button type="button" class="btn btn-primary" name="signInBtn" id="signInBtn"> signIn</button></a>
    

      <div class = "error-message"></div>
     

</form>
      <?php 
    	include_once 'footer.php'
      ?>
</div>
</body>
</html>

