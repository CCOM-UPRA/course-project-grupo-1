<?php 

session_start();

if(isset($_POST['login'])){

include('../partials/connect.php');

$email = $_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * from customers Where username = '$email' AND password = '$password'";
$result = $connect->query($sql);
$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

if($email = $final['username'] AND $password = $final['password']){
    header('location: adminindex.php');
}
else{
    echo "<script> alert('Credentials are wrong');
    window.location.href='login.php';
    </script>";
}




}


?>