<?php
// check for an existing session

session_start();
//destroy the sessin
session_destroy();
// really get rid of the information
$_SESSION['name'] = null;

// take to user to the view.php page
header('location: index.php');

?>