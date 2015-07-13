<?php

/*
 *  HEADER MODULE for edcarchitect.com
 */

session_start();

?>
<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Joseph Cramer"/>
        <meta name="viewport" content="width = device-width, initial-scale = 1"/>
        <?php if(isset($description)) {echo '<meta name="description" content="' . $description . '"/>';} ?>
        <meta name="keywords" content="<?php echo $keywords ?>"/>
        <title>EDCArchitect - <?php echo " " . $title; ?></title>
        <link href="css/main.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    
    <body>
        <header>
            <h1><img src="images/edc_name.jpg" alt="Elvin Dee Cramer" title="Elvin Dee Cramer"></h1>
        </header>