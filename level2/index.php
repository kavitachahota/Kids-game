<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Level 2 | Kids Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php
        include "../navBar.php";

        if (!isset($_SESSION['username'])) {
			die('ERROR: Please, <a href="../index.php">Login</a> first to be able to access this page.');
		}
    ?>

    <div class="wrapper container">
        <div class="heading-block text-center">
            <h2>LEVEL 2</h2>
        </div>
        <div class="question-block">
            <div class="question-heading">
                Arrange the following in DESCENDING ORDER
            </div>
            <div class="question-values">
                <?php
                    require_once "randomValue.php";

                    $_SESSION["randomValue"] = $sort;
                ?>
            </div>
        </div>
        <div class="answer-block">
            <form action="">
                <label for="inputResult">Enter your Answer here: </label>
                <input type="text" id="inputResult" name="inputResult" onkeyup="showHint(this.value)">
            
        </div>
        <div class="result-block">
            <p>Result: 
                <span id="txtHint"></span>
            </p>
        </div>
        <div class="bts-container">
            <button type="button" id="submit-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Submit
            </button>      
            <input type="reset" class="btn btn-primary" value="Try again">
            <a href="../logout.php">
                <button type="button" class="btn btn-primary">Stop the session</button>
            </a>
            </form>
        </div>
    </div>




    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            Congrats
        </h1>
        <img src="https://cdn-icons-png.flaticon.com/512/864/864837.png" id="congrats-img" alt="">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You Have Successfully Completed the Challenge..
      </div>
      <div class="modal-footer">
        <a href="index.php">
            <button type="button" class="btn btn-primary">Try Again</button>
        </a>
        <a href="../logout.php">
            <button type="button" class="btn btn-primary">Stop the Session</button>
        </a>
        <a href="../level3">
            <button type="button" class="btn btn-primary">Go to Next Level</button>
        </a>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
