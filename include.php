<?php

// Includes file. Put everything that all pages will need here.


session_start(); // We WILL need this in order to control sessions on the page
require_once("includes/config.php"); // Load configs - Site urls, sql data etc.
require_once("includes/db.php"); // we need this in this file in order for our SQLi protection to work
require_once("includes/design.php"); // Our main design file, contains header and footer.
// Lets prevent most SQL injections, by preparing all post/get's before they reach any other PHP script.
foreach ($_POST as $key => $value)
    $_POST[$key] = $con->real_escape_string($value);

foreach ($_GET as $key => $value)
    $_GET[$key] = $con->real_escape_string($value);

// Why not check if the user is actually logged in?
if ($parser == false) { // If we are the parser, dont check if users are logged in.
    if (!isset($_SESSION['xauth'])) {
        header('Location: ' . Config::$sys_url . '/login.php');
        die("Please enable redirects in your browser to use this site.");
    } else { // Update accessflags as we go. Useful is you often edit user permissions and groups.
        $sql = "SELECT * FROM `" . Config::$db_users . "` WHERE `nickname` = '" . $_SESSION['nickname'] . "'";
        $result = $con->query($sql);
        $sqlresult = $result->fetch_object(); // Get the result
        $_SESSION['xuser'] = $sqlresult->email;
        $_SESSION['xname'] = $sqlresult->name;
        $_SESSION['nickname'] = $sqlresult->nickname;
        $_SESSION['level'] = $sqlresult->level;
    }
}
