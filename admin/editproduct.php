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


include "handler/editproduct-handler.php";
//include("productHandler.php");
$productId = $_GET['productId'];
$query = "SELECT * FROM products WHERE product_id = $productId";
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
            <h1>Edit Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="product_name">Product Name</label>
                  <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="Enter Product Name" value = <?php echo $rowProduct['product_name']?>>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value = <?php echo $rowProduct['price']?>>
                </div>
                <div class="form-group">
                  <label for="inventory_amount">Stock</label>
                  <input type="text" class="form-control" id="inventory_amount" name="inventory_amount" placeholder="Enter Stock" value = <?php echo $rowProduct['inventory_amount']?>>
                </div>
                <div class="form-group">
                  <label for="director">Director</label>
                  <input type="text" class="form-control" id="director" name="director" placeholder="Enter Director Name" value = <?php echo $rowProduct['director']?>>
                </div>
                <div class="form-group">
                  <label for="starring">Starring</label>
                  <input type="text" class="form-control" id="staring" name="starring" placeholder="Enter Starring" value = <?php echo $rowProduct['starring']?>>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" class="form-control" id="status" name="status" placeholder="Enter Status" value = <?php echo $rowProduct['status']?>>
                </div>
                <div class="form-group">
                  <label for="release_date">Launch Date or Launched Date</label>
                  <input type="text" class="form-control" id="release_date" name="release_date" placeholder="month day#, year" value = <?php echo $rowProduct['release_date']?>>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    
                    <textarea name="description" id="description" title="description" class="form-control" rows=4 style="color: black;" value = <?php echo $rowProduct['description']?>></textarea>
                </div>
                <div class="form-group">
                  <label for="trailer">Trailer</label>
                  <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Enter Trailer Link" value = <?php echo $rowProduct['trailer']?>>
                </div>

                
                <?php
                  
                  
                  $cat
                  ?>
      
                
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