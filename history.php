<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kids Game|History</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

	<?php
		include "navBar.php";

		include "connect.php";

		if (!isset($_SESSION['username'])) {
			die('ERROR: Please, <a href="index.php">Login</a> first to be able to access this page.');
		}

		$result=$connection->query("SELECT * FROM history");

		$count_row = $result->num_rows;

		echo <<<END
			<h2 class="text-center">History</h2>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Score Time</th>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Result</th>
						<th scope="col">Lives Used</th>
					</tr>
				</thead>
			<tbody>
			END;
				for ($i = 0 ; $i < $count_row ; ++$i){
					$row = $result->fetch_array(MYSQLI_ASSOC);
					echo "<tr>
							<td scope=\"row\">" . $row['scoreTime'] . "</td>
							<td>" . $row['id'] . "</td>
							<td>" . $row['fName'] . " " . $row['lName'] . "</td>
							<td>" . $row['result']."</td>
							<td>".$row['livesUsed']."</td></tr>";
							
				}
			echo <<<END
			</tbody>
		</table>
		END;

		$connection->close();

		include "footer.php";
	?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>