<?php 

if(isset($_POST['editAddress'])){

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
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $birthdate = $_POST['birthdate'];

    $wasSuccessful = $account->updateAddress($id, $street1, $street2, $city, $state, $zip);
    $wasSuccessful = $account->updateUser($id, $firstName, $lastName, $email, $password, $phoneNumber, $birthdate);

    if($wasSuccessful){
        // $ship_id = $account->addressID($id);
        // $account->changeShippingDefault($id, $ship_id);
        echo "<script> alert('Address updated');</script>";
        header("Location: account_information.php");
        
    }
}
?>