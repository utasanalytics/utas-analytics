<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Styles/main.css">
    <script src="JavaScript/main.js"></script>
</head>
<body>
        
    <div class="main-wrapper">
<!-- Displays a navigation toolbar at the top of the screen so the user can navigate the site-->
        <nav class="nav main_nav">          

            <div>
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button name="logout-submit" type="submit">Logout</button>
                    </form>';
                        
                    }
                    else {
                        echo '<form action="includes/login.inc.php" method="post">
                        <input name="mailuid" type="text" placeholder="Email...">
                        <input name="pwd" type="password" placeholder="">
                        <button name="login-submit" type="submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>';
                    }
                ?>



            </div>


            

        </nav>
    </div>
        <!-- The sidebar -->
        <div class="content-wrapper">
            <div class="sidebar">
                <h3 class="title"><a class="logo" href="index.php">ANALYTICS BICT & MITS</a></h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="unit_explorer.php">Unit Explorer</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="consultation.php">Consultation</a></li>
                    <li><a href="administration.php">Profile</a></li>
                    <li><a href="statistics.php">Statistics</a></li>
                </ul>
            </div>
        
    