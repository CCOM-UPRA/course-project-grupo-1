<?php 
 $_SESSION['cart'][$count] =array('product_id'=> $_GET['cart_id'], 'product_name'=> $_GET['cart_name'], 'price'=> $_GET['cart_price'],'photo'=> $_GET['cart_photo']);
if(isset($_POST['submit'])){

    
    $id = $_SESSION['userLoggedIn'];

    $street1 = $_POST['address1']; 

    if(isset($_POST['address2'])){
        $street2 = $_POST['address2'];
    }else{
        $street2 = null; 
    }
    $city = $_POST['city'];
    $zip = $_POST['zipcode'];
    $state = $_POST['state']; 
    $_SESSION['checkout'] =array('street1'=> $_POST['address1'], 'street2'=> $_POST['cart_name'], 'price'=> $_GET['cart_price'],'photo'=> $_GET['cart_photo']);
   if(){
   $addAddress = $account->registerAddress($id, $street1, $street2, $city, $state, $zip);

   }
    




    $card_number = $_POST['card_number'];
    $secNumber = $_POST['secNumber'];
    $expDate = $_POST['expDate'];

    $addPayment = $account->addPayment( $card_number, $secNumber, $expDate);


    if(isset($_POST['submit'])){
       
        echo "<script> alert('Checkout');</script>";
        header("location: recibo.php");
        
       
    }
    
}
?>