
<?php
require_once("includes/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>PRISM - Buy Movies Online</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/internal.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="inner-page">
<div id="page">

 <?php
include("includes/header.php");

?>
  <!-- Navbar -->
<?php
include("includes/navbar.php");

?>



  <!-- Main Container -->
  <section class="main-container col1-layout" style="padding: 10px;">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          <div class="page-title" style="padding :10px;">
            <h1 style="color: #001D3D;">Shopping Cart</h1>
          </div>
          <div class="table-responsive">
            <form method="post" action="#">
              <fieldset>


  <script>
                            function sendtoIndex() {
                            location.replace("index.php")
                            }
                        </script>


                           <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Product Name</span></th>
                      <th rowspan="1" class="hidden-phone"></th>
                      <th rowspan="1" class="hidden-phone"><span class="nobr">Move to Wishlist</span></th>
                      
                      <th class="a-center " rowspan="1">Qty</th>
                      <th colspan="1" class="a-center">Price</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>

                 <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="50"><button  class="button btn-continue" onclick = "sendtoIndex()" title="Continue Shopping" type="submit"><span>Continue Shopping</span></button>

                            <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                        <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" onclick = "$('#shopping-cart-table tbody tr').remove()" type="submit"><span>Clear Cart</span></button></td>
                    </tr>
                  </tfoot>


                 <?php   
                 
                
                  if(isset($_SESSION['cart'])){ 
                    $dolars = 0;
                    $taxprice = 0;
                    $item_price =0;
                    foreach($_SESSION['cart'] as $value){
                      $dolars += $value['price'];
                      $item_price = $value['inventory_amount']*$value['price'];
                    ?>

                  <!-- Scripts para anadir y remover -->
                            
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <tbody>
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" alt="" src="<?php echo $value['photo']?>"></a></td>
                        <td><h2 class="product-name">
                            <a href="<?php echo $value['photo'] ?>">
                                <?php echo $value['product_name']?>
                            </a> </h2></td>
                      <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                      <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                      
                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name=""></td>
                      <td class="a-center movewishlist"><span class="cart-price"> <span class="price"><?php 
                      if($value['price'] == 0){
                          echo "Free";
                      }else{
                        
                        echo $value['price'];
                      } ?>
                          
                          </span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Remove item" onClick="$(this).closest('tr').remove()"><span><span>Remove item</span></span></a></td>
                    </tr>
                 </tbody>
                  <?php }
                  
                  }?>
                </table>
              </fieldset>
            </form>
          </div>
         <?php include("includes/handlers/addToCart-handler.php");?>
            <div class="cart-collaterals row">
            <div class="col-sm-4">
              <div class="totals">
                <h3>Shopping Cart Total</h3>
                <div class="inner">
                  <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                    <colgroup>
                    <col>
                    <col width="1">
                    </colgroup>
                   
                    <tbody>
                      <tr>
                        <td colspan="1" class="a-left" style="color: #001D3D;"> Subtotal </td>
                        <td class="a-right"><span class="price">$<?php
                        echo $dolars;
                        ?></span></td>
                      </tr>
                      <tr>
                        <td colspan="1" class="a-left" style="color: #001D3D;"> Tax </td>
                        <td class="a-right"><span class="price">$<?php
                         $tax = 0.115;
                         $taxprice = $tax * $dolars;
                         echo $taxprice;
                        ?></span></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="1" class="a-left" style="color: #001D3D;"><strong>Grand Total</strong></td>
                        <td class="a-right"><strong><span class="price">$<?php 
                        $total = $dolars + $taxprice;
                        echo $total;
                        ?></span></strong></td>
                      </tr>
                    </tfoot>
                  </table>
                  <ul class="checkout">
                    <li>
                        
                      <button onclick="sendtocheckout()" href="checkout.php" class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button>
                    </li>
                    <br>
                    <li><a title="Checkout with Multiple Addresses" href="#">Checkout with Multiple Addresses</a> </li>
                    <br>
                  </ul>
                </div>
              </div>
              <!--inner-->

            </div>
          </div>

          <!--cart-collaterals-->

        </div>
      </div>
    </div>
  </section>

  <!-- Brand logo starts  -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/disney icon.png" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/marvel.jpg" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/dc.jpg" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/universal.jpg" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/sony.png" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/newImages/Page Icon/paramount.com" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="assets/images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Brand logo ends  -->

   <!-- Footer  -->

<?php
include("includes/footer.php");

?>
    <!-- Footer  -->
</div>

<!-- JavaScript -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/parallax.js"></script>
<script type="text/javascript" src="assets/js/common.js"></script>
<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script>
<script type="text/javascript" src="assets/js/cloud-zoom.js"></script>

</body>
</html>
