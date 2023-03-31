<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 1</title>
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
	?>
  
	<div class="wrapper container">
		<div class="heading text-center"><h2>LEVEL 5</h2></div>
		<div class="question-block">
			<div class="question">Identify first and last letters from a set of letter</div>
			<div class="question-values">
			<?php
				
				$array = array();

				$characters = "abcdefghijklmnopqrstuvwxyz";
				$randomString = '';

				function get_first_and_last_letters($letters) {
					sort($letters); // Sort the letters in alphabetical order
					$first_letter = $letters[0]; // Get the first letter
					$last_letter = $letters[count($letters) - 1]; // Get the last letter
					return array($first_letter, $last_letter); // Return the first and last letters as an array
				  }
				  
				
				  $letters = array('c', 'a', 'f', 'b', 'e', 'd');
				  list($first_letter, $last_letter) = get_first_and_last_letters($letters);
				  echo "First letter: " . $first_letter . "\n"; // Output: "First letter: a"
				  echo "Last letter: " . $last_letter . "\n"; // Output: "Last letter:
				
				/*

				echo $randomString;
				echo "<br>";
			    print_r($first_letter);

			
				sort($array, SORT_STRING); 

				print_r($last_letter);*/
			?>
			</div>
		</div>
		<form method="POST" action="">
			<div class="answer-block">
				<div class="answer">Type your answer here:</div>
				<div class="answer-values">
					<input type="text" name="inputAnswer1" id="inputAnswer1">
					<input type="text" name="inputAnswer2" id="inputAnswer2">
					<input type="text" name="inputAnswer3" id="inputAnswer3">
					<input type="text" name="inputAnswer4" id="inputAnswer4">
					<input type="text" name="inputAnswer5" id="inputAnswer5">
					<input type="text" name="inputAnswer6" id="inputAnswer6">
				</div>
			</div>
			<div class="btns-block">
				<input type="submit" name="submit" id="submit" value="Submit">
				<input type="reset" value="Reset" >
			</div>
		</form>
	</div>

	<?php