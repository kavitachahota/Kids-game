<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kids Game|level5</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


	<h1 class="text-center">Level 5</h1>
    
</body>
<?php
session_start();

// generate random letters
$letters = array();
for ($i = 0; $i < 6; $i++) {
    $letters[] = chr(rand(97, 122)); // generate random lowercase letters
}

// store the letters in session
$_SESSION['letters'] = $letters;

// check if the form has been submitted
if (isset($_POST['submit'])) {
    $first_letter = $_POST['first_letter'];
    $last_letter = $_POST['last_letter'];
    
    // check if the user entered the correct letters
    if ($first_letter == $letters[0] && $last_letter == $letters[9]) {

        // show success message with button to go to next level or try again
        echo "<p>Congratulations, you identified the first and last letters!</p>";
        echo "<button><a href='level6.php'>Go to Next Level</a></button>";
        echo "<button><a href='level5.php'>Try Again this Level</a></button>";
        echo "<button><a href='index.php'>Login</a></button>";
        echo "<button><a href='signUp.php'>Submit</a></button>";
    } else {

        // show error message with button to try again
        echo "<p>Sorry, you did not identify the correct letters.</p>";
        echo "<button><a href='level5.php'>Try Again this Level</a></button>";
        echo "<button><a href='index.php'>Login</a></button>";
        echo "<button><a href='signUp.php'>Submit</a></button>";
    }
} else {
	
    // show the form to the user
    echo "<p>Identify the first and last letters from the set of letters:</p>";
    echo "<form method='post' action='level5.php'>";
    echo "<label for='first_letter'>First Letter:</label>";
    echo "<input type='text' name='first_letter' maxlength='1' required>";
    echo "<label for='last_letter'>Last Letter:</label>";
    echo "<input type='text' name='last_letter' maxlength='1' required>";
    echo "<button type='submit' name='submit'>Submit</button>";
    echo "</form>";
    echo "<button><a href='index.php'>Login</a></button>";
   
}
?>