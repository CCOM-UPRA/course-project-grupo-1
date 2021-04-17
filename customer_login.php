<?php 
session_start();
require_once("partials/connect.php");


if(isset($_POST['login'])){
    
    $user_ad= 1;
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=("SELECT * from user Where email ='$email' AND password='$password'");
    $results=$connect->query($sql);
    $final=$results->fetch_assoc();
    $_SESSION['email']=$final['email'];
    $_SESSION['password']=$final['password'];
    $_SESSION['userName']=$final['firstName'];
    $_SESSION['lastName']=$final['lastName'];
    $_SESSION['loggedin'] = false;
    
    if($email=$final['email'] AND $password = $final['password']){
        
        if($user_ad = $final['user_admin']){
            
            echo "<script> alert('Credentials are right');     window.location.href='admin/adminindex.php';     </script>";
            
            
        }
        else{
                echo "<script> alert('Credentials are right');     window.location.href='index.php';     </script>";
               
                $_SESSION['loggedin'] = true;
            }
        
        }

    else{
        echo "<script> alert('Credentials are wrong');     window.location.href='login.php';     </script>"; 
      
    }        

}

?>