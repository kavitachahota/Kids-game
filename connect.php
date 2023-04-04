<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'kidsgames';

    $connection = new mysqli($hostname, $username, $password);
    mysqli_select_db($connection, $database);
    date_default_timezone_set("America/New_York");
?>
