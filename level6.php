<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 6 | Kids Game</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
	
        
    <?php
        include "navBar.php";


        if (!isset($_SESSION['username'])) {
            die('ERROR: Please, <a href="index.php">Login</a> first to be able to access this page.');
        }
    ?>

    <h1 class="text-center">Level 6</h1>

    <div class="wrapper container">

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
            echo "Identify the minimum and maximum number in this array: <h2>" . implode(", ", $numbers) . "</h2><br>";

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

        <form method="get">
            <div class="mb-3">
                <label for="inputResult1" class="form-label">Minimum number: </label>
                <input type="number" class="form-control" id="inputResult1" 
                name="inputResult1">
            </div>
            <div class="mb-3">
                <label for="inputResult2" class="form-label">Maximum number: </label>
                <input type="number" class="form-control" id="inputResult2" 
                name="inputResult2">
            </div>

            <!-- <label for="inputResult1">Minimum number: </label>
            <input type="number" id="inputResult1" name="inputResult1"><br>
            <label for="inputResult2">Maximum number: </label>
            <input type="number" id="inputResult2" name="inputResult2"><br> -->
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-primary" value="Reset">
        </form>
    </div>

    <?php
		include "footer.php";
	?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
