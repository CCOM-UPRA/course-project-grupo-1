<?php 
include('partials/connect.php');
$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['passWord'];
$password2 = $_POST['pass'];
$phonenumber = $_POST['phoneNumber'];
$zip = $_POST['code'];
$state = $_POST['region'];
$country = $_POST['nation'];
$PO_box = $_POST['po_box'];
$address = $_POST['shipping'];
if($password==$password2)
{
    $sql="INSERT INTO user(firstName, lastName,email,password, phonenumber) VALUES('$firstname','$lastname','$email',PASSWORD('$password'),'$phonenumber')";
    $connect->query($sql);
    
    $sql2 ="INSERT INTO address(address_id, street1,street2,postal_code,city) VALUES('$address','$PO_box','$state','$country','$zip')";
    $connect->query($sql2);
    echo "<script> alert('You are registered');
    window.location.href='login.php';
    </script>";
    

}else{
    echo "<script> alert('Password did not match');
    window.location.href='sign_up.php';
    </script>";
}














?>