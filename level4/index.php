<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Level 4 | Kids Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script type="text/javascript" src="main.js"></script>

    <style> 
        #txtHint{color: red}
        .heading-block{
            margin-top: 10px ;
        } 
        #submit-btn{
            display: none;
        }
    </style>
</head>

<body>

    <?php
        include "../navBar.php";
    ?>

    <div class="wrapper container">
        <div class="heading-block text-center">
            <h2>LEVEL 4</h2>
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
            <a href="../level5">
                <button type="button" class="btn btn-primary" id="submit-btn">Submit</button>
            </a>    
            <input type="reset" class="btn btn-primary" value="Try again">
            <a href="../logout.php">
                <button type="button" class="btn btn-primary">Stop the session</button>
            </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
