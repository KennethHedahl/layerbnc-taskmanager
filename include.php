<?php

// Includes file. Put everything that all pages will need here.


session_start(); // We WILL need this in order to control sessions on the page
require_once("includes/config.php"); // Load configs - Site urls, sql data etc.
require_once("includes/design.php"); // Our main design file, contains header and footer.
require_once("includes/db.php"); // we need this in this file in order for our SQLi protection to work

// Lets prevent most SQL injections, by preparing all post/get's before they reach any other PHP script.
foreach ($_POST as $key => $value)
    $_POST[$key] = $con->real_escape_string($value); 
 
foreach ($_GET as $key => $value)
    $_GET[$key] = $con->real_escape_string($value);

// Why not check if the user is actually logged in?
if (!isset($_SESSION['xauth'])) {
    header('Location: ' . Config::$sys_url . '/login.php');
    die("Please enable redirects in your browser to use this site.");
}
