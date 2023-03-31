<?php
include "connect.php";
include "functions.php";

if(!isset($_POST["createBtn"])){
    $inputFirstName = NULL;
    $inputLastName = NULL;
    $inputUsername = NULL;
}


if(isset($_POST["createBtn"])){
    $inputFirstName = $_POST["inputFirstName"];
    $inputLastName = $_POST["inputLastName"];
    $inputUsername = $_POST["inputUsername"];
    $inputPassword = $_POST["inputPassword"];
    $inputConfirmPassword = $_POST["inputConfirmPassword"];

    // is empty
    if($inputFirstName == ""){
        echo "<script>alert(\"" . getErrorMessages("no-first-name") . "\")</script>";      
    }
    elseif($inputLastName == ""){
        echo "<script>alert(\"" . getErrorMessages("no-last-name") . "\")</script>";
    }
    elseif($inputUsername == ""){
        echo "<script>alert(\"" . getErrorMessages("no-username") . "\")</script>";
    }
    elseif($inputPassword == ""){
        echo "<script>alert(\"" . getErrorMessages("no-pass") . "\")</script>";
    }
    elseif($inputConfirmPassword == ""){
        echo "<script>alert(\"" . getErrorMessages("no-confirm-pass") . "\")</script>";
    }
    else{
        // check username exist
        if(checkUsername($inputUsername, $connection)){
            echo "<script>alert(\"" . getErrorMessages("username-exist") . "\")</script>";
        }
        else{
            // password and confirm password
            if(matchPassword($inputPassword, $inputConfirmPassword)){
                // ok
                $sql = "INSERT INTO player (fName, lName, userName, registrationTime, registrationOrder) VALUES (\"$inputFirstName\", \"$inputLastName\", \"$inputUsername\", CURRENT_TIMESTAMP, NULL)";
                
                if($connection->query($sql)  === TRUE){
                    $last_id = mysqli_insert_id($connection); # getting last auto increament id
                    
                    $sql = "INSERT INTO authenticator(passCode, registrationOrder) VALUES (\"$inputPassword\", $last_id)";
                    if($connection->query($sql)){
                        echo "<script>alert(\"" . "Account created successfully.\nRedirecting to Login page." . "\")</script>";
                    }
                    else{
                        echo "<script>alert(\"" . "Account cannot be created. Please try again" . "\")</script>";
                    }
                }
                else{
                    echo "<script>alert(" . "Account cannot be created. Please try again" . ")</script>";
                }
            }
            else{
                echo "<script>alert(" . getErrorMessages("no-same-pass") . ")</script>";
            }
        }
    }
}

$connection->close();

require_once "signUp.php";

?>