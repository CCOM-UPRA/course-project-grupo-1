<?php

if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);
    $_SESSION['cart'][$count]=array('product_id'=> $_GET['cart_id'], 'product_name'=> $_GET['cart_name'], 'price'=> $_GET['cart_price']);
}
    else{
        $_SESSION['cart'][0]=array('product_id'=> $_GET['cart_id'], 'product_name'=> $_GET['cart_name'], 'price'=> $_GET['cart_price']);
    }
 foreach($_SESSION['cart'] as $item){
     echo $item['product_id'];
 };
?>