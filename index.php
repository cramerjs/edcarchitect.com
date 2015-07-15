<?php
/*
 *  CONTROLLER for edcarchitect.com
 */

session_start();

// get a trigger key-value from the POST or GET arrays
if (isset($_POST['action'])) {
    $action = $_GET['action'];
    // $action = filterString($_POST['action']);
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
    // $action = filterSting($_GET['action']);
}

// perform an action based on the trigger
switch ($action) {
        
    /* ---------- Content Page Actions ---------- */
    case 'about':
        // send the about view
        $title = 'About';
        include 'views/about.php';
        break;
    case 'design':
        // send the design view
        $title = 'Design';
        // $description = 'example photos of Elvin Dee Cramer Architect projects';
        // $keywords = 'Elvin Dee Cramer, architect, design, work, projects';
        include 'views/design.php';
        break;
    case 'site_plan':
        // send the site plan view
        $title = 'Site Plan';
        // $description = 'Site Plan for edcarchitect.com';
        // $keywords = 'site plan';
        include 'views/site_plan.php';
        break;
    default:
        // send the home page view
        $title = 'Home';
        // $description = 'Elvin Dee Cramer Architect Home Page';
        // $keywords = 'Elvin Dee Cramer, architect, home';
        include 'views/home.php';
        break;
    
}
