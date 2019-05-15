<?php 
session_start();
require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BICT/MITS Help Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Styles/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
        
    <div class="header-container">
    <!-- Displays a navigation toolbar at the top of the screen so the user can navigate the site-->
        <div class="header-navbar">          
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="unit_explorer.php">Unit Explorer</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="consultation.php">Consultation</a></li>
            </ul>
        </div>
        <div class="header-login">
            <?php
            if (isset($_SESSION['userId'])) {
                echo '<form class="navform" action="includes/logout.inc.php" method="post">
                <button name="logout-submit" type="submit">Logout</button>
            </form>';
                
            }
            else {
                echo '<form class="navform" action="includes/login.inc.php" method="post">
                <input name="mailuid" type="text" placeholder="Email...">
                <input name="pwd" type="password" placeholder="Password...">
                <button name="login-submit" type="submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>';
            }
            ?>
        </div>
    </div>