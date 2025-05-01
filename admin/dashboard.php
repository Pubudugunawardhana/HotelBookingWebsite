<?php

require('inc/essentials.php');
adminLogin();
session_regenerate_id(true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

    <!-- Dashboard panal -->

<body class="bg-light">

   <!-- Admin panal Hedder -->
<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
  <div class="row">

    <!-- Dashboard panal body -->
    <div class="col-log-10 ms-auto p-4 overflow-hiddden">
    ...
    </div>
  </div>
</div>

    <?php require('inc/scripts.php'); ?>
</body>
</html>