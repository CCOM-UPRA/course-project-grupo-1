<?php
//include("partials/connect.php");


$firstName1=$_POST['firstName1'];
$lastName1=$_POST['lastName1'];
$email1=$_POST['email1'];

$sql="UPDATE user". "SET firstName = $firstName1 Where email ='$email' AND firstName='$firstName'";

$connect->query($sql);




?>