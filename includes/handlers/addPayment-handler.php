<?php 

if(isset($_POST['addPayment'])){
    $id = $_SESSION['userLoggedIn'];

    if($addPayment){
       
        echo "<script> alert('Checkout');</script>";
        // header("location: recibo.php");
        
       
    }

}
?>