<?php 

session_start();

if(isset($_POST['login'])){

include('partials/connect.php');

$email = $_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$results = $connect->query($sql);
$final = $results->fetch_assoc();

$_SESSION['emails']=$final['emails'];
$_SESSION['password']=$final['password'];

if($email = $final['email'] AND $password = $final['password']){
    header('location:checkout.php');
}
else{
    echo "<script> alert('Credentials are wrong');
    window.location.href='login.php';
    </script>";
}
}


?>