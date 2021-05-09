<?php

if(isset($_POST['submit'])){

    $track = $_GET['track'];
    $status = $_POST['order'];



    mysqli_query($connect, "UPDATE orders SET order_status = '$status' WHERE tracking_number = '$track'");

    header('Location: adminvieworders.php');
}



?>