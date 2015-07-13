<?php

/* 
 * ERRORDOC 500.php for edcarchitect.com
 */

session_start();
$message = $_SESSION['message'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Server Error</title>
    </head>
    <body>
        <?php
        echo $message;
        ?>
    </body>
</html>