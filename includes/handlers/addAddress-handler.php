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

    $wasSuccessful = $account->registerAddress($id, $street1, $street2, $city, $state, $zip);

    if($wasSuccessful){
        // $ship_id = $account->addressID($id);
        // $account->changeShippingDefault($id, $ship_id);
        echo "<script> alert('Address Added');</script>";
        header("Location: index.php");
       
    }

}