<?php 

if(isset($_POST['payment'])){

    $id = $_SESSION['userLoggedIn'];

   
   
    $card_number = $_POST['card_number'];
    $secNumber = $_POST['secNumber'];
    $expDate = $_POST['expDate'];

    $addPayment = $account->addPayment( $card_number, $secNumber, $expDate);
    

    $order_status = "Pending";
    foreach($_SESSION['cart'] as $value){
        $dolars += $value['price'];
    }
    $tax = 0.115;
    $taxprice = $tax * $dolars;
    $total = $dolars + $taxprice;
    $tracking_number = rand();
    $address_id= "SELECT * from address where $id = userID";
    $sql = "INSERT INTO orders(userID,shipping_address_id,paymentID,billing_address_id,order_status,total,tracking_number) VALUES('$id','$address_id','$id','$address_id','$oder_status','$total',)";

    $connect->query($sql);

    header("location: recibo.php");
}
?>