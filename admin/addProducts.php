<!DOCTYPE html>
<html>
    
<?php
    include("adminpartials/head.php");
    ?>
    
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php 
error_reporting(0);
include("adminpartials/header.php");
include("adminpartials/aside.php");
//include("productHandler.php");
?>
  <?php

error_reporting(E_ALL);

if(isset($_POST['submit']) ){
include("../partials/connect.php");
//products
$product_Name=$_POST['product_Name'];
$category=$_POST['category'];
$photo= basename( $_FILES["photo"]["product_Name"]);
$genres=$_POST['genres'];
$rating=$_POST['rating'];
$price=$_POST['price'];
$director=$_POST['director'];
$trailer=$_POST['trailer'];
$stocks_amount=$_POST['stocks_amount'];
$starring=$_POST['starring'];
$launch_Date=$_POST['launch_Date'];
$description=$_POST['description'];
$status = $_POST['status'];
$photo= basename( $_FILES["photo"]["product_Name"]);


// $target_dir = "newImages/"; 


  
  if($category == 'Movie'){
    $target_dir = "newImages/Movies/movies"; 
   
  }
  else if($category == 'Free'){
    $target_dir = "newImages/Free/"; 
  }
  else if($category == 'Series'){
    $target_dir = "newImages/Series/tv/"; 
  }
  else if($category == 'Coming Soon'){
    $target_dir = "newImages/Coming Soon/"; 
  }else if($category == 'Sales'){
    $target_dir = "newImages/Movies/movies/"; 
  }
  $fileName = basename($_FILES["photo"]["name"]);
  $targetFilePath = $target_dir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  $allowTypes = array('jpg','png', 'jpeg','gif', 'pdf');
  if(in_array($fileType, $allowTypes)){

  }
      
// $target="../newImages/";
// $file_path=$target . basename($_FILES['file']['name']);
// $file_name=$_FILES['file']['name'];
// $file_tmp=$_FILES['file']['tmp_name'];
// $file_store="../newImages/".$file_name;

// move_uploaded_file($file_tmp,$file_store);

// $query = ("SELECT category_id from categories where $genres = category_genre AND $category = category_type");
$sql="INSERT INTO products(product_Name,photo,category,genres,trailer,rating, price, director, stocks_amount, starring, launch_Date, description,status)
 VALUES('$product_Name','$targetFilePath','$category','$genres','$trailer','$rating','$price','$director','$stocks_amount','$starring','$launch_Date','$description','$status')";




$connect->query($sql);

mysqli_close($connect);

}



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
            <h1>Add Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="product_name">Product Name</label>
                  <input type="text" class="form-control" id="product_name" name="product_Name" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category">
                </div>
                <div class="form-group">
                  <label for="genres">Genres</label>
                  <input type="text" class="form-control" id="genres" name="genres" placeholder="Enter Genres">
                </div>
                <div class="form-group">
                  <label for="rating">Rating</label>
                  <input type="text" class="form-control" id="rating" name="rating" placeholder="Enter rating">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                  <label for="stocks_amount">Stock</label>
                  <input type="text" class="form-control" id="stocks_amount" name="stocks_amount" placeholder="Enter Stock">
                </div>
                <div class="form-group">
                  <label for="director">Director</label>
                  <input type="text" class="form-control" id="director" name="director" placeholder="Enter Director Name">
                </div>
                <div class="form-group">
                  <label for="starring">Starring</label>
                  <input type="text" class="form-control" id="staring" name="starring" placeholder="Enter Starring">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" class="form-control" id="status" name="status" placeholder="Enter Status">
                </div>
                <div class="form-group">
                  <label for="launch_Date">Launch Date or Launched Date</label>
                  <input type="text" class="form-control" id="launch_Date" name="launch_Date" placeholder="month day#, year">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" title="description" class="form-control" rows=4 style="color: black;"></textarea>
                </div>
                <div class="form-group">
                  <label for="trailer">Trailer</label>
                  <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Enter Trailer Link">
                </div>
                <div class="form-group">
                  <label for="photo">File input</label>
                  <input type="file" id="photo" name="photo" value="Upload">
                </div>
                <?php
                  
                  include('../partials/connect.php');
                  $cat
                  ?>
                 <!--<div class= "form-group">
                       <label for="category_type">Category Type</label>
                      <select id= "category_type" name="category_type">
                          <option>Movies</option>
                          <option>Series</option>
                          <option>Sales</option>
                          <option>Free</option>
                          <option>Coming Soon</option>
                      </select>
                  </div> -->
                
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
