<?php

if(isset($_POST['submit'])){

    $productID = $_GET['productId'];
    $productName = $_POST['product_name']; 
    $price = $_POST['price'];
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $trailer = $_POST['trailer'];
    $director = $_POST['director'];
    $starring = $_POST['starring'];
    $status = $_POST['status'];
    $inventory = $_POST['inventory_amount'];
    $release = $_POST['release_date'];


    if($inventory < 0){
        $inventory = 0;
    }

    mysqli_query($connect, "UPDATE products SET product_name = '$productName', price = '$price', description = '$description', photo = '$photo', trailer = '$trailer', director = '$director', starring = '$starring', status = '$status', inventory_amount = '$inventory', release_date = '$release'
    WHERE product_id = '$productID'");

    header('Location: manageProducts.php');
}



?>