<!DOCTYPE html>
<html>

<head>
    <title>Password Modification Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    
    <?php
        
        include 'connect.php';
        include 'functions.php';
        include "navBar.php";
    ?>

    <?php

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    if(isset($_POST["createBtn"])){ 


        // Retrieve the form data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&*])[A-Za-z\d@#$%^&*]{8,}$/';

       
          //validation
        if (preg_match($pattern, $password)) {
            echo "<b><p style='color:red;' >" ."Success!"."</p></b>";

            // Check if  entered username exists in the player table

            $sql = "SELECT registrationOrder FROM player WHERE userName='$username'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $registrationOrder = $row["registrationOrder"];

                // Check if the new password and confirm password match
                if ($password == $confirm_password) {
                    // Hash the new password
                    $passCode = password_hash($password, PASSWORD_DEFAULT);

                    // Update the authenticator table with the new password hash
                    $sql = "UPDATE authenticator SET passCode='$passCode' WHERE registrationOrder=$registrationOrder";
                    if (mysqli_query($conn, $sql)) {

                        echo "<b><p style='color:green;'>" . "Password reset successful." . "</p></b>";
                    } else {
                        echo "<b><p style='color:red;'>" . "Error updating password: " . mysqli_error($conn) . "</p></b>";
                    }
                } else {
                    echo "<b><p style='color:red;' >" . "New password and confirm password do not match.<br/>" . "</p></b>";
                    echo '<a href="modifyPassword.php">Go Back to Password Reset Page</a>';
                }
            }
        } else {
            echo "<b><p style='color:red;'>" . "Username not found.<br/>" . "</p></b>";
            echo '<a href="modifyPassword.php">Go Back to Password Reset Page</a>';
        }
    } 
   // mysqli_close($conn);
    ?>
    <br />
    <b><a href="index.php">Go To Login Page</a></b>
    <br /><br /><br /><br /><br />
    <?php
    include_once 'footer.php'
    ?>

</body>

</html>