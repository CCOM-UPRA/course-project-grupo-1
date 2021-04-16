 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>PharmaSys - Add Product</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>
<body>

    <?php
	  include "alerts_handeler.php";
	include_once 'conn.php';
    ?>

<?php
   if(isset($_POST['submit'])) 
   {
        include_once "conn.php";
        $link = OpenCon();
        
        // Main user data
        $name = mysqli_real_escape_string($link, $_REQUEST['name']);
        $last = mysqli_real_escape_string($link, $_REQUEST['last']);
        $phone_number = mysqli_real_escape_string($link, $_REQUEST['p_number']);
        $b_date = mysqli_real_escape_string($link, $_REQUEST['b_date']);
        $email = mysqli_real_escape_string($link, $_REQUEST['email']);
        $pass = mysqli_real_escape_string($link, $_REQUEST['pass']);
        $role = mysqli_real_escape_string($link, $_REQUEST['role']);
        $status = mysqli_real_escape_string($link, $_REQUEST['status']);
        
        // Data of acount creation fro reports 
        $acc_date = date("Y-m-d h:m:s");
        
        // Data to be inserted into addres table
        $add1 = mysqli_real_escape_string($link, $_REQUEST['add1']);
        $add2 = mysqli_real_escape_string($link, $_REQUEST['add2']);
        $city = mysqli_real_escape_string($link, $_REQUEST['city']);
        $zip_code = mysqli_real_escape_string($link, $_REQUEST['zip_code']);
        
        
        // Attempt insert query execution
        $sql_user = "INSERT INTO `users`(`user_id`,`first_name`, `last_name`, `b_date`, `email`, `pass`, `user_phone`,`role`, `status`, `account_date`) VALUES (Null,'$name','$last','$b_date','$email','$pass','$phone_number','$role','$status','$acc_date')";
        
        if(mysqli_query($link, $sql_user)){
            alert('success','SUCCESS','User added succesfuly.');
            
            //Gets the user id for inserting the address
            $sql_getId = "SELECT user_id FROM users WHERE email= '$email'";
            $r = mysqli_query($link, $sql_getId);
            $row = mysqli_fetch_array($r);
            $id = $row["user_id"];

            //Inserts the address into the coresponding table
            $sql_address = "INSERT INTO `addresses` (`address_id`,`user_id`,`address1`,`address2`,`city`,`country`,`zip_code`,`address_type`,`shipping_phone`,`valid_address`) VALUES ( NULL,'$id', '$add1', '$add2', '$city', 'PR',' $zip_code','0', '$phone_number', '0')";
            mysqli_query($link, $sql_address);
        } 
        else{
            alert('danger','ERROR','User could not be added.');
        }
        // Close connection
        mysqli_close($link);
    }
    ?>

        <div class="content-wrapper">
        <div class="content">
            <div class="row justify-content-center">
            <div class="col-xl-8">
                                  <div class="card card-default">
                                      <div class="card-header card-header-border-bottom">
                                          <h2>Add New User</h2>
                                      </div>
                                      <div class="card-body">
                                          <form action="add-user.php" method="post">
                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlInput1">Name</label>
                                                      <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required placeholder="">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlInput1">Last Name</label>
                                                      <input type="text" class="form-control" name="last" id="exampleFormControlInput1" required placeholder="">
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlInput1">Email</label>
                                                      <input type="email" class="form-control" name="email" id="exampleFormControlInput1" required placeholder="">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlInput1">Password</label>
                                                      <input type="password" class="form-control" name="pass" id="exampleFormControlInput1" required placeholder="">
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">Address 1</label>
                                                      <textarea class="form-control" name="add1" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">Address 2</label>
                                                      <textarea class="form-control" name="add2" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">City</label>
                                                      <input type="text" class="form-control" name="city" id="exampleFormControlInput1">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">Zip Code</label>
                                                      <input type="text" class="form-control" name="zip_code" id="exampleFormControlInput1">
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                             <div class="row">
                                              <div class="col-md-6">
                                              <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">Phone Number</label>
                                                      <input type="text"class="form-control" name="p_number" id="exampleFormControlTextarea1" rows="3" >
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">Birth Date</label>
                                                      <input type="date"class="form-control" name="b_date" id="exampleFormControlTextarea1" rows="3" >
                                                  </div>
                                              </div>
                                             </div>
                                      
                                              <div class="row">
                                                      <div class="form-group col-md-6">
                                                      <div class="form-group">
                                                          <label for="exampleFormControlSelect12">Role</label>
                                                          <select class="form-control" name="role" id="exampleFormControlSelect12" required>
                                                                  <option value="0">Admin</option>
                                                                  <option value="1" selected>Customer</option>
                                                              </select>
                                                      </div>
                                                      </div>
                                                      
                                                      <div class="form-group col-md-6">
                                                      <div class="form-group">
                                                          <label for="exampleFormControlSelect2">Status</label>
                                                              <select class="form-control" name="status" id="exampleFormControlSelect12" required>
                                                                  <option value="0">Active</option>
                                                                  <option value="1">Pending</option>
                                                                  <option value="2">Inactive</option>
                                                              </select>
                                                      </div>
                                                      </div>	
                                                  </div>



                                              <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                                  <button type="submit" class="btn btn-primary btn-default" name="submit">Add</button>
                                                  <button class='btn btn-outline-secundary'><a href="users.php" >Back</a></button>
                                                  
                                              </div>
                                          </form>
                                      </div>
            </div>
                                  
                                  </div>
</div>





<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
