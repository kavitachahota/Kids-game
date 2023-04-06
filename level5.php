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
echo "Identify the first and last letter of this string: " . $randomString . "<br>";

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


<h1 class="text-center">Level 5</h1>
    
<form method="get">
    <label for="inputResult1">First letter: </label>
    <input type="text" id="inputResult1" name="inputResult1"><br>
    <label for="inputResult2">Last letter: </label>
    <input type="text" id="inputResult2" name="inputResult2"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>