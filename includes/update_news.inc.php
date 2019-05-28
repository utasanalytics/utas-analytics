<?php
/*depending on how the user got to this page different processes will occur, this is determined by the submit button name*/


    
    require 'dbh.inc.php';
    /*this section is in charge of updating items in the masterlist*/

    $title = $_POST['title'];
    $message = $_POST['message'];


    $sql = "INSERT INTO news (message, title) VALUES ('$message', '$title')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?news=success");
        exit();
    } else {
        header("Location: ../index.php?error=sqlerror");
        exit();
    }

