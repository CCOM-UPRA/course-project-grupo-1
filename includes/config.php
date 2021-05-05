<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Puerto_Rico");

    $connect = mysqli_connect("localhost", "root", "", "prism");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>


