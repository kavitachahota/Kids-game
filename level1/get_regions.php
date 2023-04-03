<?php

#require_once "index.php";
session_start();

$result = $_SESSION["randomValue"];


// Array with names
$adminRegionQC=array();
$adminRegionQC[] = $result;


// get the q parameter from URL
$q = $_REQUEST["rqst"];

$correspondingName = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($adminRegionQC as $name) {
    if (stristr($q, substr($name, 0, $len))) {

         if($q == $adminRegionQC[0]){
            $correspondingName = "You Won";
         }
         else if(strlen($q) > strlen($adminRegionQC[0])){
            $correspondingName = "out of limit";
         }
         else{
            $correspondingName = "You are doing great. Go on...";
         }
    }
    else{
        $correspondingName = "Try with different one";
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $correspondingName === "" ? "There are no corresponding names" : $correspondingName;
?>
