<?php
include "includes/config.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prism Receipt</title>
    <link rel="stylesheet" href="assets/css/recibo.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="assets/newImages/HomeImages/PageIcon/LogoPrincipal2.png">
      </div>
      <h1>Prism Receipt</h1>
      <?php
     $id = $_SESSION['userLoggedIn'];
     $query = "SELECT * FROM user NATURAL JOIN address WHERE userID = $id";
     $resultProduct = mysqli_query($connect, $query);
     $rowProduct = mysqli_fetch_assoc($resultProduct);
      ?>
      <div id="project">
        <div><span>PROJECT</span> Prism</div>
        <div><span>CLIENT</span> <?php echo $rowProduct['firstName'];?></div>
        <div><span>ADDRESS</span> <?php echo $rowProduct['street1']; echo $rowProduct['street2']; echo "   ";echo $rowProduct['postal_code']; echo "   ";echo $rowProduct['city']; echo "   ";echo $rowProduct['country'];?></div>
        <div><span>EMAIL</span> <?php echo $rowProduct['email'];?></div>
        
      </div>
    </header>
    <main>
     <table>
        <thead>
          <tr>
            <th class="service">Product</th>
            <th>PRICE</th>
            <th>QTY</th>
          
          </tr>
        </thead>
        <tbody>
    <?php   
                 
                
                 if(isset($_SESSION['cart'])){ 
                   $dolars = 0;
                   $taxprice = 0;
                   $item_price =0;
                   foreach($_SESSION['cart'] as $value){
                     $dolars += $value['price'];
                     //$item_price = $value['inventory_amount']*$value['price'];
                   ?>
     
          <tr>
            <td class="service"> <?php echo $value['product_name']?></td>
            <td class="unit"><?php echo $value['price']?></td>
            <td class="qty">1</td>
            
      
        <?php }
                  
                }?>
                <?php
                 include("includes/handlers/addToCart-handler.php");
                 ?>
                     </tr>
         
         <td colspan="4">SUBTOTAL</td>
         <td class="total">$<?php
                        if($dolars == 0){
                          echo "0";
                        }else{
                        echo $dolars;
                        }
                        ?></td>
       </tr>
       <tr>
         <td colspan="4">TAX</td>
         <td class="total">$<?php
                         $tax = 0.115;
                         $taxprice = $tax * $dolars;
                         if($taxprice == 0){
                           echo "0";
                         }else{
                           echo $taxprice;
                         }
                         
                        ?></td>
       </tr>
       <tr>
         <td colspan="4" class="grand total">GRAND TOTAL</td>
         <td class="grand total">$<?php 
                        $total = $dolars + $taxprice;
                        if($total == 0){
                          echo "0";
                        }else{
                          echo $total;
                        }
                        
                        ?></td>
       </tr>
     </tbody>
      </table>
     
      <div id="notices">
      <button ><a href="index.php" style="color:black">Back</a></button>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>