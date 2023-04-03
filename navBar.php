<?php
	session_start();
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Kids Game</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="history.php">History</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<?php
						if (!isset($_SESSION['username'])) {
							echo "Account";
						}
						else{
							echo $_SESSION['username'];
						}
					?>

				</a>
				<ul class="dropdown-menu">
					<?php
						if (!isset($_SESSION['username'])) {
							echo <<<END
							<li><a class="dropdown-item" href="index.php">Login</a></li>
							<li><a class="dropdown-item" href="signupForm.php">Sign Up</a></li>
							END;
						}
						else{
							echo <<<END
							<li><a class="dropdown-item" href="../logout.php">Logout</a></li>
							END;
						}
					?>
					
				</ul>
			</li>
			</ul>
		</div>
	</div>
</nav>