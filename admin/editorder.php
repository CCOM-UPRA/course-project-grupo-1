<!DOCTYPE html>
<html>
    
<?php
    include("adminpartials/head.php");
    ?>
    
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php 
include "../includes/config.php";
include("adminpartials/header.php");
include("adminpartials/aside.php");


include "handler/editorder-handler.php";
//include("productHandler.php");
$track = $_GET['track'];
$query = "SELECT * FROM orders WHERE tracking_number = $track";
$resultProduct = mysqli_query($connect, $query);
$rowProduct = mysqli_fetch_assoc($resultProduct);
?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
   
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-3">
          </div>
        <div class="col-sm-6">
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <h1>Edit Order</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="order">Product Name</label>
                  <input type="text" class="form-control" id="order" name="order"  placeholder="Enter Status" value = <?php echo $rowProduct['order_status']?>>
                </div>
            
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                <button ><a href="adminindex.php" >Back</a></button>
              </div>
            </form>
            </div>
        </div>
      
        <div class="col-sm-3">
        </div>
    </section>
    <!-- /.content -->
  </div>
</div>
  <?php
    include("adminpartials/footer.php");
      ?>
    
 </body>
</html>