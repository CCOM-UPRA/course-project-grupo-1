<!DOCTYPE html>
<html>
    
<?php
    include("adminpartials/head.php");
    ?>
    
<body class="hold-transition skin-blue sidebar-mini">
<?php

error_reporting(E_ALL);

if(isset($_POST['submit']) ){
include("../partials/connect.php");

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$phoneNumber=$_POST['phoneNumber'];
$birthdate=$_POST['birthdate'];
$user_admin=$_POST['user_admin'];
$status=$_POST['status'];


//$category_type=$_POST['category_type'];
/*
$target="../uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);
*/

$sql="INSERT INTO user(firstName, lastName, email, password, phoneNumber, birthdate, user_admin, status) 
VALUES('$firstName','$lastName','$email','$password','$phoneNumber','$birthdate','$user_admin','$status')";

//$sql="INSERT INTO categories(category_genre, category_type) VALUES('$genres','$category_type')";

$connect->query($sql);

mysqli_close($connect);

}



?>
<div class="wrapper">

<?php 
error_reporting(0);
include("adminpartials/header.php");
include("adminpartials/aside.php");

//include_once "conn.php";
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
            <h1>Add User</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Enter Last name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password" required placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone number</label>
                  <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required placeholder="Enter Phone number">
                </div>
                <div class="form-group">
                  <label for="birthdate">Birth Date</label>
                  <input type="text" class="form-control" id="birthdate" name="birthdate" required placeholder="month day#, year">
                </div>
                <div class="form-group">
                  <label for="user_admin">Admin</label>
                  <input type="text" class="form-control" id="user_admin" name="user_admin" required placeholder="Enter Role">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" class="form-control" id="status" name="status" required placeholder="Enter Status">
                </div>
                <!-- <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" title="description" class="form-control" rows=4 style="color: black;"></textarea>
                </div>
                <div class="form-group">
                  <label for="photos">File input</label>
                  <input type="file" id="photos" name="file">
                </div> -->
                
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
