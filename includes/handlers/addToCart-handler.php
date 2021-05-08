<?php

if(isset($_GET['cart_id']) != null){
    if(isset($_SESSION['cart'])){
        $checker=array_column($_SESSION['cart'],'product_name');
        if(in_array($_GET['cart_name'],$checker)){
           
        }else{
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('product_id'=> $_GET['cart_id'], 'product_name'=> $_GET['cart_name'], 'price'=> $_GET['cart_price'],'photo'=> $_GET['cart_photo']);
            }
        }else{
            $_SESSION['cart'][0]=array('product_id'=> $_GET['cart_id'], 'product_name'=> $_GET['cart_name'], 'price'=> $_GET['cart_price'],'photo'=> $_GET['cart_photo'],'quantity' => 1);
        }
    foreach($_SESSION['cart'] as $item){
        echo $item['photo'];
    };
    
}

if(isset($_GET['remove']) != null){
    foreach($_SESSION['cart'] as $key =>$item){
            print_r($key);
        if($item['product_id'] == $_GET['remove'])
        {
            unset($_SESSION['cart'][$key]);
            
        }

    }
}
?>