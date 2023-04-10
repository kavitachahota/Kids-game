<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 5 | Kids Game</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	
<?php

include "navBar.php";


if (!isset($_SESSION['username'])) {
die('ERROR: Please, <a href="index.php">Login</a> first to be able to access this page.');
}

?>

<h1 class="text-center">Level 5</h1>

<div class="wrapper container">



<?php

function checkSameSpec($str) {
$firstLetter = $str[0];
$lastLetter = $str[strlen($str)-1];
$letters = "abcdefghijklmnopqrstuvwxyz";
$isSameSpec = true;

for ($i = 0; $i < strlen($str); $i++) {
if ($str[$i] != $firstLetter && $str[$i] != $lastLetter) {
$isSameSpec = false;
break;
}
}

if (strpos($letters, $firstLetter) !== false && strpos($letters, $lastLetter) !== false && $isSameSpec) {
return "You Won";
} else {
return "Try again";
}
}

// Generate a random string of length 10 containing only characters
$characters = 'abcdefghijklmnopqrstuvwxyz';
$randomString = substr(str_shuffle($characters), 0, 10);

// Pick a random index to identify the first and last letters
$firstLetterIndex = rand(0, strlen($randomString)-1);
$lastLetterIndex = rand(0, strlen($randomString)-1);
while ($firstLetterIndex == $lastLetterIndex) {
$lastLetterIndex = rand(0, strlen($randomString)-1);
}

// Extract the first and last letters
$firstLetter = $randomString[$firstLetterIndex];
$lastLetter = $randomString[$lastLetterIndex];

// Output the question
echo "Identify the first and last letter of this string: <h2>" . $randomString . "</h2><br>";

// Check the user's answer if provided
if (isset($_GET["inputResult1"]) && isset($_GET["inputResult2"])) {
$userAnswer = $_GET["inputResult1"] . $_GET["inputResult2"];
$result = checkSameSpec($userAnswer);
echo "Result: " . $result . "<br>";
if ($result == "You Won") {
echo "Congratulations! You have successfully completed this level. ";
echo "<a href='level6.php'>Go to Next Level 6</a>";

}else{
echo"Oops, your answers are incorrect!!.";
}
} 
?>

<br>



<form method="get">
<div class="mb-3">
<label for="inputResult1" class="form-label">First letter: </label>
<input type="text" class="form-control" id="inputResult1" 
name="inputResult1">
</div>
<div class="mb-3">
<label for="inputResult2" class="form-label">Last letter: </label>
<input type="text" class="form-control" id="inputResult2" 
name="inputResult2">
</div>
<!-- 
<label for="inputResult1">First letter: </label>
<input type="text" id="inputResult1" name="inputResult1"><br> -->
<!-- <label for="inputResult2">Last letter: </label>
<input type="text" id="inputResult2" name="inputResult2"><br> -->
<input type="submit"  class="btn btn-primary" value="Submit">
<input type="reset"  class="btn btn-primary" value="Reset">
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
