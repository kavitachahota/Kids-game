<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 2</title>
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
		<div class="heading text-center"><h2>LEVEL 6</h2></div>
		<div class="question-block">
			<div class="question">Identify minimum and maximum numbers from a set of numbers</div>
			<div class="question-values">
			<?php
				
				$array = array();

				$numbers = "0-100";
				$randomString = '';

                //Identify maximum numbers
				function MaxNum($array){

                $n = count($array);
                $max = $array[0];
                for($i = 1; $i< $n; $i++)
                if($max < $array[$i])
                $max = $array[$i];
                return $max;
                }

                //identify minimum numbers
                function MinNum($array){

                    $n = count($array);
                    $min = $array[0];
                    for($i = 1; $i< $n; $i++)
                    if($min > $array[$i])
                    $min = $array[$i];
                    return $min;
                    }

				$array =array (12,3,1,14,65,20);
                echo "MaxNum number is: ".(MaxNum($array))."<br>";
                echo("\n");
                echo "MinNum number is: ".(MinNum($array));

				/*echo $randomString;
				echo "<br>";
				#print_r($resultArray);

				
				rsort($array); 

				print_r($array);
                */
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>