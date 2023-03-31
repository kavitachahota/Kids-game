<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kids Game|Level 1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<style>
		input[type=text]{
			width: 20px;
		}
	</style>
  </head>
  <body>

	<?php
		include "navBar.php";

		
		if (!isset($_SESSION['username'])) {
			die('ERROR: Please, <a href="index.php">Login</a> first to be able to access this page.');
		}
		
		
	?>
  
	<div class="wrapper container">
		<div class="heading text-center"><h2>LEVEL 1</h2></div>
		<div class="question-block">
			<div class="question">Arrange the given alphabets in ASCENDING ORDER</div>
			<div class="question-values">
			<?php
				
				$resultArray = array();

				$characters = "abcdefghijklmnopqrstuvwxyz";
				#$randomString = '';
				
				for ($i = 0; $i < 6; $i++) {
					$index = 0;
					do{
						$index = rand(0, strlen($characters) - 1);
					}while(in_array($characters[$index], $resultArray));
					#$randomString .= " " . $characters[$index];
					$resultArray[$i] = $characters[$index];
				}

				#var_dump($resultArray);

				#print_r($resultArray);

				// sorting the array in ascending order
				sort($resultArray);
				foreach ($resultArray as $key => $val) {
					echo "resultArray[" . $key . "] = " . $val . "\n";
				} 

				#var_dump($resultArray);
				#print_r($resultArray);
/*
				if(!isset($_POST["submit"])){
					$inputAnswer1 = NULL;
					$inputAnswer2 = NULL;
					$inputAnswer3 = NULL;
					$inputAnswer4 = NULL;
					$inputAnswer5 = NULL;
					$inputAnswer6 = NULL;
				}
		*/
				$isCorrect = true;
		
				if(isset($_POST["submit"])){
					$inputAnswer1 = $_POST["inputAnswer1"];
					$inputAnswer2 = $_POST["inputAnswer2"];
					$inputAnswer3 = $_POST["inputAnswer3"];
					$inputAnswer4 = $_POST["inputAnswer4"];
					$inputAnswer5 = $_POST["inputAnswer5"];
					$inputAnswer6 = $_POST["inputAnswer6"];
		
					$inputArray = array($inputAnswer1,$inputAnswer2,$inputAnswer3,$inputAnswer4,$inputAnswer5,$inputAnswer6);
					#var_dump($inputArray);
					if(array_diff($resultArray, $inputArray) == array()){
					#if(($inputAnswer1 == $resultArray[0]) && ($inputAnswer2 == $resultArray[1]) && ($inputAnswer3 == $resultArray[2]) && ($inputAnswer4 == $resultArray[3]) && ($inputAnswer5 == $resultArray[4]) && ($inputAnswer6 == $resultArray[5])){
						$isCorrect = true;
						#echo "<b>success</b>";
					}
					else{
						$isCorrect = false;
						#echo "<b>Fail</b>";
					}
		
					echo $isCorrect ? "<b>success</b>" : "<b>Fail</b>";
				}
		
		
				require_once "level1Form.php";
		
			?>
			</div>
		</div>
		
	</div>

	<?php

		
	?>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>