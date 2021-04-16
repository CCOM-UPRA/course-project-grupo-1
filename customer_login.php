<?php 

if(isset($_POST['login'])){
<<<<<<< HEAD
    
    include("partials/connect.php");
        
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * from user Where email ='$email' AND password='$password'";
    $results=$connect->query($sql);
    $final=$results->fetch_assoc();
        
    if($email=$final['email']){
        echo "<script> alert('Credentials are right');     window.location.href='admin/adminindex.php';     </script>"; 
    }else{
        echo "<script> alert('Credentials are wrong');     window.location.href='login.php';     </script>"; 
    }        
=======

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
>>>>>>> cac1ff9dc25bc9c87ad4c3abed3b02e5c0f2d5e9
}

?>