<?php

require 'dbh.inc.php';


$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo $row['title'];
        echo $row['message'];
        echo "</li>";
    }
} else {
    echo "There is no news!";
}


