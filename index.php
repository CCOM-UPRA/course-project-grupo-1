

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
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/newstyle.css" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index index">
<div id="page"> 

<?php
    include "includes/config.php";
    include "includes/header.php";
?>
  <!-- Navbar -->
<?php
include "includes/navbar.php";

?> 
  <!-- End Navbar -->
    
  <!-- Slider -->
  <div id="thm-slideshow" class="thm-slideshow">
    <div class="container">
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            <!-- SLIDE  -->
            <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/images/slide-img1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="assets/newImages/HomeImages/SliderImages/findingDory2.jpg" alt=""> 
              <!-- LAYERS --> 
              
              
            <!-- SLIDE  -->
            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="assets/newImages/HomeImages/SliderImages/MonsterHunter2.png"  alt=""> 
              <!-- LAYERS --> 
              
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-19" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/images/video-img.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="assets/newImages/HomeImages/SliderImages/The%20100%20SEason%203.jpg"  alt=""> 
             
            
          </ul>
          <div class="tp-static-layers"></div>
          <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- end Slider -->
  
  <div class="promo-section">
  <div class="container">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="Lucifer Morningstar" src="assets/newImages/HomeImages/TopBanners/resized-image-Promo%20(2).jpeg"></div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="assets/newImages/HomeImages/TopBanners/resized-image-Promo%20(3).jpeg"></div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="assets/newImages/HomeImages/TopBanners/resized-image-Promo%20(10).jpeg"></div>
  </div>
  </div>
  </div>
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products container">
      <div class="new_title center">
        <h2>Featured Films</h2>
        <div class="starSeparator"></div>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">






         <?php

          $sql = "Select * from products  where product_ID > 1  AND price > 0";
         $results = $connect->query($sql);

            while($final = $results->fetch_assoc()){ ?>

          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info">  <img class = "newimg" alt="<?php echo $final['product_name']?>" src="<?php echo $final['photo']?>">
                 <div class="actions">
                    <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>
                    <!-- <div class="link-wishlist"><a href="wishlist.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div> -->
                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                    <div style='background-color:white;' class="add_cart">
                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                    </div>
                  </div>
                  <!-- <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="<?php echo $final['product_name']?>" href="#"><?php echo $final['product_name']?></a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price"><?php
                        if($final['price']>0):{
                        echo  "$".$final['price']; }
                        endif; 
                        if($final['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($final['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?></span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <?php } ?>
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider -->
  

  <!--Promotion Banner End--> 
  
  <div class="container">
    <div class="row">
      <div class="products-grid">
        <div class="col-md-12">
          <div class="std">
            <div class="home-tabs wow bounceInUp animated">
              <div class="producttabs">
                <div id="thm_producttabs1" class="thm-producttabs"> 
                  <!--<h3></h3>-->
                  <div class="thm-pdt-container"> 
                    <!--Begin Tab Nav -->
                    <div class="thm-pdt-nav">
                      <ul class="pdt-nav">
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales"><span class="title-navi">Best Seller</span></li>
                        <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals"><span class="title-navi">New Releases</span></li>
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="featured" data-href="pdt_featured"><span class="title-navi">Featured</span></li>
                      </ul>
                    </div>
                    <!-- End Tab Nav --> 




                    <!--              Best Seller                    -->

                     <?php

                      $sql = "Select * from products  where product_name = 'Thor Love and Thunder'  ";
                      $results = $connect->query($sql);

                      while($final = $results->fetch_assoc()){ ?>
                    <!--Begin Tab Content -->
                    <div class="thm-pdt-content wide-5">
                      <div class="pdt-content is-loaded pdt_best_sales">

                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Frozen 2" class="product-image"><img src="<?php echo $final['photo']?>" alt="Retis lapen casen"></a>
                                  <div class="actions">
                                     <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>
                                   <!-- <div class="link-wishlist"><a href="wishlist.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>-->
                                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                                    <div class="add_cart">
                                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                                    </div>
                                  </div>
                                 <!--  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>-->
                                </div>
                              </div>


                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title=""><?php echo $final['product_name']?></a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?php
                        if($final['price']>0):{
                        echo  "$".$final['price']; }
                        endif; 
                        if($final['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($final['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>


                          <?php } ?>
                          <?php

                      $sql = "Select * from products  where category = 'series' ORDER BY price ASC limit 3";
                      $results = $connect->query($sql);

                      while($final = $results->fetch_assoc()){ ?>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="<?php echo $final['product_name']?>" class="product-image"><img src="<?php echo $final['photo']?>"></a>
                      
                                  <div class="actions">
                                  <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>
                                   <!-- <div class="link-wishlist"><a href="wishlist.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>-->
                                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                                    <div style='background-color:white;' class="add_cart">
                                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                                    </div>
                                  </div>
                               <!--    <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>-->
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo $final['trailer']?>" title="<?php echo $final['product_name']?>"><?php echo $final['product_name']?></a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?php
                        if($final['price']>0):{
                        echo  "$".$final['price']; }
                        endif; 
                        if($final['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($final['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <?php } ?>


                        </ul>
                      </div>



                      <!--                               New Releases                       -->
                        <?php

                      $sql = "Select * from products  where product_name = 'Jurassic World Dominion'  ";
                      $results = $connect->query($sql);

                      while($final = $results->fetch_assoc()){ ?>
                      <div class="pdt-content pdt_new_arrivals is-loaded  tab-content-actived">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="<?php echo $final['product_name']?>" class="product-image"><img src="<?php echo $final['photo']?>"></a>
                                            <div class="actions">
                                    <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>
                                   <!-- <div class="link-wishlist"><a href="wishlist.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>-->
                                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                                    <div class="add_cart">
                                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                                    </div>
                                  </div>
                                <!-- <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>-->
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="<?php echo $final['product_name']?>"><?php echo $final['product_name']?></a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?php
                        if($final['price']>0):{
                        echo  "$".$final['price']; }
                        endif; 
                        if($final['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($final['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                             <?php } ?>
                               <?php

                      $sql = "Select * from products  where category = 'Movie' limit 3 ";
                      $results = $connect->query($sql);

                      while($final = $results->fetch_assoc()){ ?>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="<?php echo $final['product_name']?>" class="product-image"><img src="<?php echo $final['photo']?>" alt="<?php echo $final['product_name']?>"></a>
                                         <div class="actions">
                                  <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>
                                   <!-- <div class="link-wishlist"><a href="wishlist.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div> -->
                                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                                    <div style='background-color:white;' class="add_cart">
                                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="<?php echo $final['product_name']?>"><?php echo $final['product_name']?></a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?php
                        if($final['price']>0):{
                        echo  "$".$final['price']; }
                        endif; 
                        if($final['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($final['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                             <?php } ?>

                        </ul>
                      </div>





                      <!--                               Featured                        -->
                    <?php

                      $sql = "Select * from products  where product_name = 'Avatar'";
                      $results = $connect->query($sql);

                      while($final = $results->fetch_assoc()){ ?>

                        <div class="pdt-content pdt_featured is-loaded">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="<?php echo $final['product_name']?>" class="product-image"><img src="<?php echo $final['photo']?>" alt="<?php echo $final['product_name']?>"></a>
                                      <div class="actions">
                                   <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>

                                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                                    <div style='background-color:white;' class="add_cart">
                                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="<?php echo $final['trailer']?>" title="<?php echo $final['product_name']?>"><?php echo $final['product_name']?></a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">FREE</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <?php } ?>

                    <?php
                      $sql = "Select * from products  where category = 'Movie' limit 3 ";
                      $results = $connect->query($sql);

                      while($final = $results->fetch_assoc()){ ?>

                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="<?php echo $final['product_name']?>" class="product-image"><img src="<?php echo $final['photo']?>" alt="<?php echo $final['product_name']?>"></a>
                                  <div class="actions">

                                     <div  class="quick-view-btn"><?php echo "<a href='quick_view.php?productID={$final["product_id"]}' class='popup-btn' data-toggle='tooltip' data-placement='right' data-original-title='Quick View'> <span>Quick View</span></a>"?> </div>

                                    <div class="link-compare"><a href="<?php echo $final['trailer']?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="Watch Trailer"><span>Watch Trailer</span></a></div>
                                    <div style='background-color:white;' class="add_cart">
                                    <?php echo "<a href='index.php?cart_id={$final['product_id']} &cart_name={$final['product_name']} &cart_price={$final['price']}&cart_photo={$final['photo']}' class='popup-btn' data-toggle='tooltip' data-placement='right' type='button' data-original-title='Add to Cart'><i class='fa fa-shopping-cart'><span></span></i></a>"?>
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="<?php echo $final['product_name']?>"><?php echo $final['product_name']?></a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?php
                        if($final['price']>0):{
                        echo  "$".$final['price']; }
                        endif; 
                        if($final['price']<0):{
                        echo  "Coming Soon"; }
                        endif; 
                        if($final['price']==0):{
                        echo  "Free"; }
                        endif; 
                          
                          
                          ?></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <?php } ?>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 
  
  
  
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
  
  
   <!-- Footer  --> 
  
<?php
include("includes/footer.php");

?>
    <!-- Footer  -->
    
</div>
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search_mob" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li>
      <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.php">Grid</a> </li>
        <li> <a href="list.php">List</a> </li>
        <li> <a href="product_detail.php">Product Detail</a> </li>
        <li> <a href="shopping_cart.php">Shopping Cart</a> </li>
        <li><a href="checkout.php">Checkout</a>
          <ul>
            <li><a href="checkout_method.php">Checkout Method</a> </li>
            <li><a href="checkout_billing_info.php">Checkout Billing Info</a> </li>
          </ul>
        </li>
        <li> <a href="wishlist.php">Wishlist</a> </li>
        <li> <a href="dashboard.php">Dashboard</a> </li>
        <li> <a href="multiple_addresses.php">Multiple Addresses</a> </li>
        <li> <a href="about_us.php">About us</a> </li>
        <li><a href="blog.php">Blog</a>
          <ul>
            <li><a href="blog-detail.php">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.php">Contact us</a> </li>
        <li><a href="404error.php">404 Error Page</a> </li>
      </ul>
    </li>
    <li><a href="#">Women</a>
      <ul>
        <li> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="#" class="">Clutch Handbags</a> </li>
            <li> <a href="#l" class="">Diaper Bags</a> </li>
            <li> <a href="#" class="">Bags</a> </li>
            <li> <a href="#" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Material Bag</a>
          <ul>
            <li> <a href="#">Beaded Handbags</a> </li>
            <li> <a href="#">Fabric Handbags</a> </li>
            <li> <a href="#">Handbags</a> </li>
            <li> <a href="#">Leather Handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Shoes</a>
          <ul>
            <li> <a href="#">Flat Shoes</a> </li>
            <li> <a href="#">Flat Sandals</a> </li>
            <li> <a href="#">Boots</a> </li>
            <li> <a href="#">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="#">Bracelets</a> </li>
            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
            <li> <a href="#l">Pendants</a> </li>
            <li> <a href="#">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul>
            <li> <a href="#">Casual Dresses</a> </li>
            <li> <a href="#">Evening</a> </li>
            <li> <a href="#">Designer</a> </li>
            <li> <a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="#">Swimsuits</a> </li>
            <li> <a href="#">Beach Clothing</a> </li>
            <li> <a href="#">Clothing</a> </li>
            <li> <a href="#">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Men</a>
      <ul>
        <li> <a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li> <a href="#">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
          </ul>
        </li>
        <li> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Electronics</a>
      <ul>
        <li> <a href="#"><span>Mobiles</span></a>
          <ul>
            <li> <a href="#"><span>Samsung</span></a> </li>
            <li> <a href="#"><span>Nokia</span></a> </li>
            <li> <a href="#"><span>IPhone</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li> <a href="#" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Cameras</span></a>
          <ul>
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="#"><span>MP3 Players</span></a> </li>
            <li> <a href="#"><span>IPods</span></a> </li>
            <li> <a href="#"><span>Speakers</span></a> </li>
            <li> <a href="#"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Computer</span></a>
          <ul>
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Appliances</span></a>
          <ul>
            <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="#"><span>Indoor Lighting</span></a> </li>
            <li> <a href="#"><span>Kitchen Tools</span></a> </li>
            <li> <a href="#"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Furniture</a> </li>
    <li><a href="#">Kids</a> </li>
    <li><a href="contact-us.php">Contact Us</a> </li>
  </ul>
  <div class="dropdown block-language-wrapper">
                <ul>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/german.png" alt="language"> German </a></li>
                </ul>
              </div>
              <div class="dropdown block-currency-wrapper"> 
                <ul>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                </ul>
              </div>
</div>

<!-- End Footer --> 

<!-- JavaScript --> 
<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/common.js"></script> 
<script type="text/javascript" src="assets/js/countdown.js"></script> 
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution-slider.js"></script> 
<script type="text/javascript" src="assets/js/revolution.extension.js"></script> 
  <script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "05/03/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
	
	var dthen1 = new Date("12/12/17 11:59:00 PM");
	start = "01/20/16 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_2";
	CountBack_slider(gsecs1, "countbox_2", 1);
</script>

<script type="text/javascript">
					var tpj=jQuery;			
					var revapi4;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_4_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_4_1");
						}else{
							revapi4 = tpj("#rev_slider_4_1").show().revolution({
								sliderType:"standard",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
									keyboardNavigation:"off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"zeus",
										enable:true,
										hide_onmobile:true,
										hide_under:750,
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:30,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:30,
											v_offset:0
										}
									}
									,
									bullets: {
										enable:true,
										hide_onmobile:true,
										hide_under:600,
										style:"metis",
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										direction:"horizontal",
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:30,
										space:5,
										tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"80%"
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[768,1024,778,480],
								gridheight:[890,600,500,400],
								lazyType:"none",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									levels:[2,3,4,5,6,7,12,16,10,50],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"off",
								stopAfterLoops:-1,
								stopAtSlide:-1,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>
        
     
     <script src="assets/js/main_login.js"></script>
          
</body>
</html>
