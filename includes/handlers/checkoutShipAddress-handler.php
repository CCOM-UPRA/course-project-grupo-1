<?php 

if(isset($_POST['continuePayment'])){

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
    $addAddress = $account->registerShipping($id, $street1, $street2, $city, $state, $zip);
    header("location: paymentCheckout.php");
}
?>