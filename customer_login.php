<?php 

if(isset($_POST['login'])){
    
    include("partials/connect.php");
    $user_ad= 1;
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=("SELECT * from user Where email ='$email' AND password='$password' AND user_admin = '$user_ad'");
    $results=$connect->query($sql);
    $final=$results->fetch_assoc();
    
        
    if($email=$final['email'] AND $password = $final['password']){
        
        if($user_ad = $final['user_admin']){
            echo "<script> alert('Credentials are right');     window.location.href='admin/adminindex.php';     </script>";
    
        }
            else{
                echo "<script> alert('Credentials are right');     window.location.href='index.php';     </script>";
            }
        
        }

    else{
        echo "<script> alert('Credentials are wrong');     window.location.href='login.php';     </script>"; 
    }        

    
}

?>