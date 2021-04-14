<?php
include("../../partials/connect.php");


$firstName=$_POST['firstName'];
$email=$_POST['email'];
$cellphone=$_POST['telephone'];
$message=$_POST['message'];

$sql="INSERT INTO contact(firstName, email, telephone, message) VALUES('$firstName','$email','$cellphone','$message')";

$connect->query($sql);

?>