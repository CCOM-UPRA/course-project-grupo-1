<?php
    ob_start();
    session_start();

    $connect = mysqli_connect("localhost", "root", "", "prism");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>


