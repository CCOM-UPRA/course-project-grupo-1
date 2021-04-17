<?php
include("../../partials/connect.php");


$firstName=$_POST['firstName'];
$email=$_POST['email'];
$phoneNumber=$_POST['phoneNumber'];
$message=$_POST['message'];

$sql="INSERT INTO user(firstName, email, phoneNumber, message) VALUES('$firstName','$email','$phoneNumber','$message')";

$connect->query($sql);

?> 