<?php

$servername = "localhost";
$dBUsername = "mekvall";
$dBPassword = "newpassword";
$dBName = "utasanalytics";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}