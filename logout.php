
<?php
session_start();
 echo <<<END
    <p class="container">
        You have successfully logout.
        <br>
        Please <a href="index.php">Login</a> again to continue.
    </p>
 END;

 #$_SESSION[""]
 session_destroy();
?>