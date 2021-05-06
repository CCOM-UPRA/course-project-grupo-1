<?php

if(isset($_POST['submit'])){

    $userID = $_GET['userID'];
    $first_Name = $_POST['first_Name']; 
    $last_Name = $_POST['last_Name']; 
    $email = $_POST['email'];
    $password=$_POST['password'];
    $password2 = $_POST['password2'];
    $phoneNumber = $_POST['phone'];
    $birth = $_POST['birthdate'];

    $street1 = $_POST['street1']; 

    if(isset($_POST['street2'])){
        $street2 = $_POST['street2'];
    }else{
        $street2 = null;
    }
    $city = $_POST['city'];
    $zip = $_POST['postal_code'];
    $state = $_POST['state'];


    

    mysqli_query($connect, "UPDATE user SET firstName = '$first_Name', lastName = '$last_Name', email = '$email', password = '$password', phoneNumber = '$phoneNumber', birthdate = '$birthdate', starring = '$starring', user_type = '$user_type,'status = '$status' WHERE userID = '$userID'");
    mysqli_query($connect,"UPDATE address SET street1 = '$street1', street2 = '$street2', postal_code = '$zip', city = '$city', country = '$country' WHERE userID = '$userID' ");

     header('Location: manageUser.php');
}



?>