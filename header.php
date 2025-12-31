<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <div id="logo"></div>
        <div id="navbar">
            <a href="index.php">home</a>
            <a href="services.php">service</a>
            <a href="Contact">Contact</a>
        </div>
        <?php if(!empty($_SESSION['user'])) {?>
        <div id="login_panel">
        <a href="logout.php">Logout</a>
        </div>
        <?php }else{ ?>
        <div id="login_panel">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
        <?php } ?>
    </div>
    
