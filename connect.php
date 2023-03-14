<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'kidsgames';

    $connection = new mysqli($hostname, $username, $password);

    mysqli_select_db($connection, $database);
?>
