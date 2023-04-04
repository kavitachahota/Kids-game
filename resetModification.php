<?php

include "connect.php";
include "functions.php";

if(!isset($_POST["modifyBtn"])){
    $inputUsername = NULL;
    $inputPassword = NULL;
    $inputConfirmPassword = NULL;
}

if(isset($_POST["modifyBtn"])){
    $inputUsername = $_POST["inputUsername"];
   
    $inputPassword = $_POST["inputPassword"];
    $inputConfirmPassword = $_POST["inputConfirmPassword"];

    // is empty
    if($inputUsername == ""){
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
       
        if(!checkUsername($inputUsername, $connection)){
            echo "<script>alert(\"" . getErrorMessages("username-no-exist") . "\")</script>";
        }
        else{
         
                // password and confirm password
                if(matchPassword($inputPassword, $inputConfirmPassword)){
                    // ok
                    $sql = "UPDATE authenticator SET passCode = \"$inputPassword\" WHERE registrationOrder = (SELECT id FROM player WHERE userName = \"$inputUsername\")";
                
                    if($connection->query($sql)  === TRUE){
                        echo "<script>alert(\"" . "Password modified successfully." . "\")</script>";
                    }
                    else{
                        echo "<script>alert(\"" . "Password cannot be modified. Please try again" . "\")</script>";
                    }
                }
                else{
                    echo "<script>alert(" . getErrorMessages("no-same-pass") . ")</script>";
                }
            }
        }
    }


$connection->close();

require_once "modifyPassword.php";

?>   