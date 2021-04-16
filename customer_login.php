<?php 

session_start();

if(isset($_POST['login'])){

include('partials/connect.php');

$email = $_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$results = $connect->query($sql);
$final = $results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

if($email = $final['email'] AND $password = $final['password']){
    header('location: index.php');
}
else{
    echo "<script> alert('Credentials are wrong');
    window.location.href='login.php';
    </script>";
}
}


?>