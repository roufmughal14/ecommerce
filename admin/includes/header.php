<?php 
include ('includes/connection.php'); 


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Dashboard</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <!-- Responsive Table css -->
    <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="left-side-menu-dark topbar-dark">

<div id="wrapper">

    <?php include('topbar.php'); ?>
    
    <?php include('left-sidebar.php'); ?>