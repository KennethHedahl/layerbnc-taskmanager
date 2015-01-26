<?php

// Parserfile - Used to login users.
$parser = true; // Tell include.php that we are about to parse, so we do not need any loginchecks here.
include "include.php"; // Include all configs

$mail = $_POST['email']; // Get email from form
$pass = $_POST['password']; // Get unencrypted password from form.;
$pass_md5 = md5($pass); // Get MD5 hash from password
// Perform SQL operations to get result from DB.
$sql = "SELECT * FROM `" . Config::$db_users . "` WHERE `email` = '$mail' AND `password` = '$pass_md5'";
$result = $con->query($sql);
$sqlresult = $result->fetch_object(); // Get the result
$rows = $result->num_rows; // Get number of rows from table.

if ($rows == 1) { // Success! A row was found, thus a matching user!
    $_SESSION['xauth'] = true;
    $_SESSION['xuser'] = $sqlresult->email;
    $_SESSION['xname'] = $sqlresult->name;
    $_SESSION['nickname'] = $sqlresult->nickname;
    $_SESSION['level'] = $sqlresult->level;
    header('Location: ' . Config::$sys_url . '/?cid=home'); // Send user to logged in homepage.
    die('Error, please enable redirects in your browser.');
} else {
    header('Location: ' . Config::$sys_url . '/login.php?action=failed');
    die("Error, please enable redirects in your browser.");
}
