<?php 

if(isset($_POST['login'])){
    
    include("partials/connect.php");
        
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * from user Where email ='$email' AND password='$password'";
    $results=$connect->query($sql);
    $final=$results->fetch_assoc();
        
    if($email=$final['email'] AND $password = $final['password']){
        echo "<script> alert('Credentials are right');     window.location.href='admin/adminindex.php';     </script>"; 
    }else{
        echo "<script> alert('Credentials are wrong');     window.location.href='login.php';     </script>"; 
    }        

}

?>