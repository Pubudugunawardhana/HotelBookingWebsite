<?php

require('inc/essentials.php');
adminLogin(); // Ensure this function checks admin login status and redirects if not logged in.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

   <!-- Admin Panel Header -->
   <?php require('inc/header.php'); ?>

   <!-- Dashboard Panel Body -->
   <div class="container-fluid" id="main-content">
      <div class="row">
         <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3>Welcome to the Admin Dashboard</h3>
            <p>Use the menu on the left to navigate through the admin panel.</p>
         </div>
      </div>
   </div>

   <?php require('inc/scripts.php'); ?>
</body>
</html>