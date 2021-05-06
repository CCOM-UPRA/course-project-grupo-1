<?php 
                     require_once ("includes/config.php");
                      if(isset($_GET['productID'])){
                        $getoption=$_GET['productID'];
                      
                        $sql ="SELECT * FROM products WHERE product_id = '$getoption'";
                        $results = $connect->query($sql);

                        $row = $results->fetch_assoc();
                      }
                        

                        
                        
                        
                      
                     

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


<title>Superb, premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->

<link rel="stylesheet" href="assets/css/fancybox.css" type="text/css">
<link rel="stylesheet" href="assets/css/animate.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/revslider.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" type="assets/text/css" href="css/flexslider.css">
<link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<?php
include("includes/header.php");

?>
  <!-- Navbar -->
<?php
include("includes/navbar.php");

?> 
<body>
<div id="fancybox-overlay">
  <div id="fancybox-wrap">
    <div id="fancybox-outer">
      <div id="fancybox-content"> <a href="grid.php"></a>
        <div>
          <div class="product-view">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-sm-5 col-xs-12">
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <a href="products-images/product.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img src="<?php echo $row['photo']?>"> </a> </div>
                    <div class="flexslider flexslider-thumb">
                 
                    
                    
                      <ul class="previews-list slides">
                   


                    
                       
                      </ul>
                      
                    </div>
                  </div>
                  <!-- end: more-images --> 
                </div>
               
                <div class="product-shop col-sm-7 col-xs-12">
                  <div class="product-name">
                  
                    <h1><?php echo $row['product_name'] ?></h1>  
                  </div>
              
                    <div class="short-description">
                      <p><?php echo "Genre Query" . " Rated " . $row['rating']  ?></p>
                    </div>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="special-price"> <span class="price-label">Price</span> <span id="product-price-48" class="price"><?php echo  "$".$row['price'] ?> </span></p>
                      
                    </div>
                      
                    <p class="availability in-stock pull-right"><span>In Stock</span></p>
                
                  </div>
                  <div class="short-description">
                      <h2>Director: </h2> <p><?php echo $row['director'] ?></p> <br>
                      <h2>Starring: </h2> <p><?php echo $row['starring'] ?></p> <br>
                    <h2><strong>Description:</strong></h2>
                   <p><?php echo $row['description'] ?></p>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp &amp qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                        </div>
                      </div>
                      <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                    </div>
                    <div class="email-addto-box">
                      <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      
                      
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
          <!--product-view--> 
          
        </div>
      </div>
      <a id="fancybox-close" href="grid.php"></a> </div>
  </div>
</div>
<!-- JavaScript --> 

<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/cloud-zoom.js"></script>
</body>
</html>