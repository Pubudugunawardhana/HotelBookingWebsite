<?php

require('inc/essentials.php');

session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
redirect('index.php'); // Redirect to the login page

?>