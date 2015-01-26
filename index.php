<?php
include "include.php"; // Call our mainstack of configurations, thus we wont need to do this on every page.
// Get pageid from GET cid (Content ID)
if (isset($_GET['cid'])) {
    $page = $_GET['cid'];
} else {
    $page = "home";
}
$file = $page . ".php"; // Set filename
if (FILE_EXISTS("content/$file")) { // Check if the file actually exists
include 'content/' . $file; // It does! Lets call that page for display!
} else { // Okay, it didnt, so lets throw an error to the visitor, and stop further execution.
    die("Error. Something is wrong with that pageid!<br />Requested ID was '$page'");
}
