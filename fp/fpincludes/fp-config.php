<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/
//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE) {
    case 'index.php':
        $title = "Home Page";
        $PageID = 'Welcome';
    break;

    case 'about.php':
        $title = "About Page";
        $PageID = "About Me";
        break;

    case 'contact.php':
        $title = "Contact Page";
        $PageID = "Contact Me";
    break;

    default:
        $title = THIS_PAGE;
        $PageID = "Welcome";
}

?>
