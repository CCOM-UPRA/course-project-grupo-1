<?php
include "partials/connect.php"

if(isset($_POST["address"])){

$zip = $_POST['postal_code'];
$city = $_POST['city'];
$country = $_POST['country'];
$street2 = $_POST['street2']; 
$street1 = $_POST['street1'];



$sql = "UPDATE address(street1, street2,postal_code,city,country) VALUES('$street1','$street2','$zip','$city','$country')";

$connect->query($sql);

}else{
    echo "<script> alert('Oops, something went wrong!'); </script>";
}



?>