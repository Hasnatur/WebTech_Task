<?php
// Start the session
session_start();

// Destroy the session data
session_destroy();

// Redirect the user to the login page (replace 'login.php' with your actual login page)
header("Location: login.php");

exit;

?>
