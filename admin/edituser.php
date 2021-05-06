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
include "handler/edituser-handler.php";

$userID = $_GET['userID'];
$query = "SELECT * FROM user NATURAL JOIN address WHERE userID = $userID";
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
            <h1>Edit User</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="Enter First Name" value = <?php echo $rowProduct['firstName']?>>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Enter Last name" value = <?php echo $rowProduct['lastName']?>>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required placeholder="Enter Email" value = <?php echo $rowProduct['email']?>>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password" required placeholder="Enter Password" value = <?php echo $rowProduct['password']?>>
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone number</label>
                  <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required placeholder="Enter Phone number" value = <?php echo $rowProduct['phoneNumber']?>>
                </div>
                <div class="form-group">
                  <label for="birthdate">Birth Date</label>
                  <input type="text" class="form-control" id="birthdate" name="birthdate" required placeholder="month day#, year" value = <?php echo $rowProduct['birthdate']?>>
                </div>
                <div class="form-group">
                  <label for="street1">Address</label>
                  <input type="text" class="form-control" id="street1" name="street1" required placeholder="Enter Address" value = <?php echo $rowProduct['street1']?>>
                </div>
                <div class="form-group">
                  <label for="street2">Address 2</label>
                  <input type="text" class="form-control" id="street2" name="street2" required placeholder="Enter Address 2" value = <?php echo $rowProduct['street2']?>>
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" id="country" name="country" required placeholder="Enter Country" value = <?php echo $rowProduct['country']?>>
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" required placeholder="Enter City" value = <?php echo $rowProduct['city']?>>
                </div>
                <div class="form-group">
                  <label for="postal_code">Zip Code</label>
                  <input type="text" class="form-control" id="postal_code" name="postal_code" required placeholder="Enter Postal Code" value = <?php echo $rowProduct['postal_code']?>>
                </div>
                <div class="form-group">
                  <label for="user_type">User Type</label>
                  <input type="text" class="form-control" id="user_type" name="user_type" required placeholder="Enter Role" value = <?php echo $rowProduct['user_type']?>>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" class="form-control" id="status" name="status" required placeholder="Enter Status" value = <?php echo $rowProduct['status']?>>
                </div>

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
