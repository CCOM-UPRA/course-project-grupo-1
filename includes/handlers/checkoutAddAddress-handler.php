<?php 

if(isset($_POST['address'])){

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

   
    $card_number = $_POST['card_number'];
    $secNumber = $_POST['secNumber'];
    $expDate = $_POST['expDate'];

    $wasSuccessful = $account->addPayment($id, $card_number, $secNumber, $expDate);
    $wasSuccessful = $account->registerAddress($id, $street1, $street2, $city, $state, $zip);
    

    if($wasSuccessful){
       
        echo "<script> alert('Checkout');</script>";
        
       
    }

}
?>