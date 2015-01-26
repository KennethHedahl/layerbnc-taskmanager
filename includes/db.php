<?php

// First, lets make a connection to the DB server.
$con = new mysqli(config::$mysql_host, config::$mysql_user, config::$mysql_pass, config::$mysql_db);
if ($con->connect_error) { // If connection fails we will tell the visitor this, and show the errormessage (Not smart for public sites, but this shiz is private)
    die('Could not connect to database. (' . $con->connect_errno . ')' . $con->connect_error);
}