<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kids Game|level6</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


	<h2 class="text-center">Level 6</h2>
</body>

<?php
session_start();

// generate random numbers
$numbers = array();
for ($i = 0; $i < 6; $i++) {
    $numbers[] = rand(0, 100);
}

// store the numbers in session
$_SESSION['numbers'] = $numbers;

// check if the form has been submitted
if (isset($_POST['submit'])) {
    $min_number = $_POST['min_number'];
    $max_number = $_POST['max_number'];
    
    // check if the user entered the correct numbers

    if ($min_number == min($numbers) && $max_number == max($numbers)) {
      
        echo "<p>Congratulations, you identified the minimum and maximum numbers!</p>";
        echo "<button><a href='level6.php'>Play Again</a></button>";
        echo "<button><a href='Index.php'>Login</a></button>";
        echo "<button><a href='signUp.php'>Sign Out</a></button>";
    } else {

        // show error message with button to try again or sign out
        echo "<p>Sorry, your answer is incorrect. Please try again.</p>";
        echo "<button><a href='level6.php'>Try Again</a></button>";
        echo "<button><a href='signUp.php'>Sign Out</a></button>";
    }
} else {
	
    // show the form to the user
    echo "<p>Identify the minimum and maximum numbers from the following numbers:</p>";
    echo "<p>" . implode(", ", $numbers) . "</p>";
    echo "<form method='POST'>";
    echo "<label for='min_number'>Minimum Number:</label>";
    echo "<input type='number' id='min_number' name='min_number' min='0' max='100' required>";
    echo "<br>";
    echo "<label for='max_number'>Maximum Number:</label>";
    echo "<input type='number' id='max_number' name='max_number' min='0' max='100' required>";
    echo "<br>";
    echo "<input type='submit' name='submit' value='Submit'>";
    echo "</form>";
    // show buttons to sign out or stop the session
   
    echo "<button><a href='index.php'>Login</a></button>";
}
?>