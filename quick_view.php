<?php 
                     require_once ("includes/config.php");
                      if(isset($_GET['productID'])){
                        $getoption=$_GET['productID'];
                      
                        $sql ="SELECT * FROM products WHERE product_id = '$getoption'";
                        $results = $connect->query($sql);

                        $row = $results->fetch_assoc();
                          
                        $sql2 ="SELECT genre_name FROM genres natural join products WHERE product_id = '$getoption'";
                        $result = $connect->query($sql2);
                        $genre = $result->fetch_assoc();
                          
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
        <div id="fancybox-content"> <a href="<script>history.back()</script>"></a>
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
                      <p><?php echo $genre['genre_name'] . " Rated " . $row['rating']  ?></p>
                    </div>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="special-price"> <span class="price-label">Price</span> <span id="product-price-48" class="price"><?php
                        if($row['price']>0):{
                        echo  "$".$row['price']; }
                        endif; 
                        if($row['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($row['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?> 
                          </span></p>
                      
                    </div>
                      <?php
                        if($row['inventory_amount']>0):{ echo '<p class="availability in-stock pull-right"><span>In Stock</span></p>';}
                        endif; 
                        if($row['inventory_amount']<0):{ echo '
                        <p class="availability out-of-stock pull-right"><span>Not in Stock</span></p>';}
                        endif; 
                        if($row['inventory_amount']==0):{ echo '
                        <p class="availability out-of-stock pull-right"><span>Out of Stock</span></p>';}
                        endif; 
                          
                          
                          ?> 
                    
                
                  </div>
                  <div class="short-description">
                      <h2>Director: </h2> <p><?php echo $row['director'] ?></p> <br>
                      <h2>Starring: </h2> <p><?php echo $row['starring'] ?></p> <br>
                    <h2><strong>Description:</strong></h2>
                   <p><?php echo $row['description'] ?></p>
                  </div>
                  <div class="add-to-box">
                    
                    <div class="email-addto-box">
                      <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      
                      
                    </div>
                  </div>
                  <?php
                          include("includes/handlers/addToCart-handler.php"); ?>
                </div>
              </form>
            </div>
          </div>
          <!--product-view--> 
          
        </div>
      </div>
     <button id="fancybox-close" onclick="Previous()"></button>
    <script>
        function Previous() {
            window.history.go(-1);
        }
    </script> 
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