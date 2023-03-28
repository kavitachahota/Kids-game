<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modify Password</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    
    
    <h2 class="text-center">Modify Password</h2>
    <form class="container" method="POST" action="#">

    <div class="mb-3">
			<label for="username" class="form-label">Existing Username</label>
			<input type="text" class="form-control" id="inputUsername" name="inputUsername">
		</div>
		<div class="mb-3">
			<label for="newpassword" class="form-label"> New Password</label>
			<input type="password" class="form-control" id="inputPassword" name="inputPassword">
		</div>
		<div class="mb-3">
			<label for="confirm_password" class="form-label">Confirm New Password</label>
			<input type="password" class="form-control" id="inputConfirmPassword" name="inputConfirmPassword">
		</div>
		<button type="submit" class="btn btn-primary" name="modifyPassword" id="createBtn">Modify</button>
        <a href="signUp.php"><button type="button" class="btn btn-primary" name="signUpBtn" id="signUpBtn"> Sign-Up</button></a>
    
    </form>
   

<?php

        include 'connect.php';
        include 'functions.php';
        include "navBar.php";


        if(isset($_POST["modifyPassword"]))
        {


            $username = $_POST['username'];      
            $newpassword = $_POST['newpassword'];
            $confirm_password = $_POST['confirm_password'];

            if($username == ""){
				echo "<script>alert(\"" . getErrorMessages("no-username") . "\")</script>";
			}
			elseif($newpassword == ""){
				echo getErrorMessages("no-pass");
			}
			elseif($confirm_password == ""){
				echo getErrorMessages("no-confirm-pass");
			} else {
			
			if(checkUsername($username, $connection)){
                if(matchPassword($newpassword, $confirm_password)){
                   
                    $sql ="MODIFY Player SET Password ='12345' WHERE userName = sonic12345 ";

                    if($connection->query($sql)== TRUE){
                        echo " Password Modified Successfully";
                    } 
               
                }    
                    }
                else{
                    echo getErrorMessages("no-same-pass");
                }
            }
            
           
        }
        include "footer.php";
        
		$connection->close();
    
?>

</body>
</html>
