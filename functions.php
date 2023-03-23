<?php
    function checkUsername($inputUsername, $connection){
        $sql = " SELECT * FROM player where userName = '$inputUsername'";
        $check = $connection->query($sql);

        $count_row = $check->num_rows;

        if($count_row > 0){
            return true;
        }
        else{
            return false;
        }
    }

    function matchPassword($inputPassword, $inputConfirmPassword){
        if($inputPassword == $inputConfirmPassword){
            return true;
        }
        else{
            return false;
        }
    }

    function getErrorMessages($error){
        $messages = array(
            "no-first-name" => "Please enter the First Name",
            "no-last-name" => "Please enter the Last Name",
            "no-username" => "Please enter the Username",
            "no-pass" => "Please enter the Password Field",
            "no-confirm-pass" => "Please enter the Confirm Password Field",
            "username-exist" => "Username already exists.<br>Please try again.",
            "no-same-pass" => "Please enter same password in both the field"
        );

        return $messages[$error];
    }
?>