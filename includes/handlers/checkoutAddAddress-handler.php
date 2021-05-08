<?php 

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
    $addAddress = $account->registerAddress($id, $street1, $street2, $city, $state, $zip);
    
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