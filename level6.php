<?php

function checkMinMax($arr) {
    $min = min($arr);
    $max = max($arr);
    if ($min == 1 && $max == 100) {
        return "You Won";
    } else {
        return "Try again";
    }
}

// Generate an array of 10 random integers between 1 and 100
$numbers = array();
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
}

// Output the question
echo "Identify the minimum and maximum number in this array: " . implode(", ", $numbers) . "<br>";

// Check the user's answer if provided
if (isset($_GET["inputResult1"]) && isset($_GET["inputResult2"])) {
    $userAnswer = array(intval($_GET["inputResult1"]), intval($_GET["inputResult2"]));
    $result = checkMinMax($userAnswer);
    echo "Result: " . $result . "<br>";
    if ($result == "You Won") {
        echo "Congratulations! You have successfully completed this game. ";
        echo "<a href='history.php'>Go to History Page</a>";
    } else {
        echo "Oops, your answers are incorrect!";
    }
}

?>

<h1 class="text-center">Level 6</h1>

<form method="get">
    <label for="inputResult1">Minimum number: </label>
    <input type="number" id="inputResult1" name="inputResult1"><br>
    <label for="inputResult2">Maximum number: </label>
    <input type="number" id="inputResult2" name="inputResult2"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>