<!DOCTYPE html>
<html lang="en"> 
<?php
include "includes/config.php";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	} */
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
       width: 800px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    th{
        color:black;
    }
	.table-title {
		padding-bottom: 15px;
		background: #003566;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn {
		color: #566787;
		float: right;
		font-size: 13px;
		background: #fff;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn:hover, .table-title .btn:focus {
        color: #566787;
		background: #f2f2f2;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.settings {
        color: #003566;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    </style>
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>Account Information</title> 

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/internal.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
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

<body class="customer-account-index customer-account inner-page">
<div id="page"> 
  
  
<?php

include "includes/header.php";
include "includes/classes/Account.php";

$account = new Account($connect);

include "includes/handlers/myorders-handler.php";
    
?>
  <!-- Navbar -->
<?php
include("includes/navbar.php");

?> 
  <!-- End Navbar -->
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 animated" style="visibility: visible;">
          <div class="my-account">
            <div class="page-title">
              <h1>My Orders</h1>
            </div> 
            <div class="line"></div>
            <section class="content">
      <!-- Small boxes (Stat box) -->
     
      <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-xs-5">
                                <h2> <b>Orders</b></h2>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Tracking Number</th>
                                <th>Total</th>						
                                <th>Status</th>
                                <tbody>
                                <?php
                                    $id = $_SESSION['userLoggedIn'];
                                    $sql = "SELECT * FROM orders WHERE userID = $id";
                                    $results = $connect->query($sql);
                                    
                                    while($final = $results->fetch_assoc()){ 
                                        ?> 
                           
                            
           
                            <tr>
                                <td style="color:black"><?php echo $final['order_id']?></td>
                                <td style="color:black"><?php echo $final['tracking_number']?></td>
                                <td style="color:black">$<?php echo $final['total']?></td>   
                                <td style="color:black"><?php echo $final['order_status']?></td>
                              
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>        
        </div>
        
    </section>
            <!--dashboard--> 
          </div>
        </div>
        <aside class="col-right sidebar col-sm-3 animated" style="visibility: visible;">
          <div class="block block-account">
            <div class="block-title"> My Account </div>
            <div class="block-content">
              <ul>
                
                <li ><a href="account_information.php">Account Information</a></li>
                <li class="current"><a href="myorders.php"><span> My Orders</span></a></li>
          </div>
          <!--block block-account--> 
          
        </aside>
        <!--col-right sidebar col-sm-3--> 
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
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