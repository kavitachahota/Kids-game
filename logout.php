
<?php
session_start();
 echo <<<END
    <p class="container">
        You have successfully logout.
        <br>
        Please <a href="index.php">Login</a> again to continue again.
    </p>
 END;
 session_destroy();
?>