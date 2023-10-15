<?php


// Unset all of the session variables
$_SESSION = array();
var_dump($_SESSION);
// Destroy the session
session_destroy();

// Redirect the user to the login page or any other page
header("Location: /cms-php/index.php"); // Change "login.php" to the desired destination
exit();
?>
