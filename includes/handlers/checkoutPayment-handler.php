<?php 

if(isset($_POST['payment'])){

    $id = $_SESSION['userLoggedIn'];

   
   
    $card_number = $_POST['card_number'];
    $secNumber = $_POST['secNumber'];
    $expDate = $_POST['expDate'];

    $addPayment = $account->addPayment( $card_number, $secNumber, $expDate);
    
    $addOrder = $account->addOrder($id);

    // header("location: recibo.php");
}
?>