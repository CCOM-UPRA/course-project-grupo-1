 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>PharmaSys - Edit Product</title>

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

</head>
<body>
<?php
include 'conn.php';
include "alerts_handeler.php";
$conn = OpenCon();

if(isset($_REQUEST['edit']) && is_numeric($_REQUEST['edit']))
{
   $query = "SELECT * FROM USERS LEFT OUTER JOIN ADDRESSES  USING(USER_ID) WHERE `user_id`= '{$_REQUEST['edit']}'";

   if ($r = mysqli_query($conn, $query))
   {
      $row = mysqli_fetch_array($r);
      $id_to_edit = $row["user_id"];
	
      print "<div class='content-wrapper'>
      <div class='content'>
      <div class='row justify-content-center'>
      <div class='col-xl-8 '>
      <div class='card card-default'>
          <div class='card-header card-header-border-bottom'>
          <h2>Edit User: <span style='color:orange'>Id: $id_to_edit </span></h2>
          </div>
          <div class='card-body'>
              <form action='edit-user.php' method='get'>
                  <div class='row'>
                      <div class='col-md-6'>
                          <div class='form-group'>
                          <label for='exampleFormControlInput1'>Name</label>
                          <input type='text' class='form-control' name='name' id='exampleFormControlInput1' required placeholder='' value='".$row['first_name']."'>
                          </div>
                      </div>
                      <div class='col-md-6'>
                          <div class='form-group'>
                          <label for='exampleFormControlInput1'>Last</label>
                          <input type='text' class='form-control' name='last' id='exampleFormControlInput1' required placeholder='' value='".$row['last_name']."'>
                          </div>
                      </div>
                  </div>

                  <div class='row'>
                      <div class='col-md-6'>
                          <div class='form-group'>
                          <label for='exampleFormControlInput1'>Email</label>
                          <input type='email' class='form-control' name='email' id='exampleFormControlInput1' required placeholder=''value='".$row['email']."'>
                          </div>
                      </div>
                      <div class='col-md-6'>
                          <div class='form-group'>
                          <label for='exampleFormControlInput1'>Password</label>
                          <input type='password' class='form-control' name='pass' id='exampleFormControlInput1' required placeholder='' value='".$row['pass']."'>
                          </div>
                      </div>
                  </div>

                  <div class='row'>
                      <div class='col-md-6'>
                          <div class='form-group'>
                          <label for='exampleFormControlTextarea1'>Address 1</label>
                          <textarea class='form-control' name='add1' id='exampleFormControlTextarea1'  rows='3' >".$row['address1']." </textarea>
                          </div>
                      </div>
                      <div class='col-md-6'>
                          <div class='form-group'>
                          <label for='exampleFormControlTextarea1'>Address 2</label>
                          <textarea class='form-control' name='add2' id='exampleFormControlTextarea1' rows='3' > ".$row['address2']."</textarea>
                          </div>
                      </div>
                  </div>
                  
                  <div class='row'>
                  <div class='col-md-6'>
                      <div class='form-group'>
                      <label for='exampleFormControlTextarea1'>City</label>
                      <input type='text' class='form-control' name='city' value='".$row['city']."' id='exampleFormControlInput1'>
                      </div>
                  </div>
                  <div class='col-md-6'>
                      <div class='form-group'>
                      <label for='exampleFormControlTextarea1'>Zip Code</label>
                      <input type='text' class='form-control' name='zip_code' value='".$row['zip_code']."' id='exampleFormControlInput1'>
                      </div>
                  </div>
              </div>
                  
                 
              <div class='row'>
              <div class='col-md-6'>
              <div class='form-group'>
              <label for='exampleFormControlTextarea1'>Phone Number</label>
              <input type='text' class='form-control' name='p_number' value='".$row['user_phone']."' id='exampleFormControlInput1'>
                  </div>
              </div>
              <div class='col-md-6'>
              <div class='form-group'>
              <label for='exampleFormControlTextarea1'>Birth Date</label>
              <input type='date' class='form-control' name='b_date' value='".$row['b_date']."'id='exampleFormControlInput1'>
                  </div>
              </div>
             </div>
              

                  <div class='row'>
                          <div class='form-group col-md-6'>
                          <div class='form-group'>
                              <label for='exampleFormControlSelect12'>Role</label>
                              <select class='form-control' name='role' id='exampleFormControlSelect12' value='".$row['role']."' required>";
                              if ($row['role'] == 0) {
                                 echo "<option value='0' selected>Admin</option>
                                 <option value='1'>Customer</option>";
                              }
                              if ($row['role'] == 1) {
                                echo "<option value='0' >Admin</option>
                                <option value='1' selected>Customer</option>";
                             }
                                 echo" </select>
                          </div>
                          </div>
                          
                          <div class='form-group col-md-6'>
                          <div class='form-group'>
                              <label for='exampleFormControlSelect2'>Status</label>
                                  <select class='form-control' name='status' id='exampleFormControlSelect12' value='".$row['status']."' required>
                                      <option value='0'>Active</option>
                                      <option value='1'>Pending</option>
                                      <option value='2'>Inactive</option>
                                  </select>
                          </div>
                          </div>	
                      </div>



                  <div class='form-footer pt-4 pt-5 mt-4 border-top'>
                      <button class='btn btn-primary' type='submit' name='editar' value=".$id_to_edit.">Update</button>
                      <button class='btn btn-outline-secundary'><a href='users.php' >Back</a></button>
                  </div>
          </form>
      </div>
      </div>
                               
                            </div>
                    </div>";
   }

   else
      print "<p style='color:red;'>No se puede mostrar la información del estudiante ya que ocurrió el error:<br />' .mysqli_error($conn). '</p>";
	         
}
else if(isset($_GET['editar']) && is_numeric($_GET['editar']))
{
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $last = mysqli_real_escape_string($conn, $_REQUEST['last']);
    $b_date = mysqli_real_escape_string($conn, $_REQUEST['b_date']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
    $role = mysqli_real_escape_string($conn, $_REQUEST['role']);
    $status = mysqli_real_escape_string($conn, $_REQUEST['status']);
    $phone_number = mysqli_real_escape_string($conn, $_REQUEST['p_number']);

    $query = "UPDATE `users` SET `first_name`='$name',`last_name`='$last',
    `b_date`='$b_date',`email`='$email',`pass`='$pass',`user_phone`='$phone_number',
    `status`='$status',`role`='$role'
    WHERE `user_id` = {$_GET['editar']}";

	  if(mysqli_query($conn, $query)){
            include_once "users.php";
            alert('success','SUCCESS','Changes to user were successful.');     //Success alert is displayed when the category is inserted 
        }
        else{
            // Displays error alert when faild to connect to the database
            alert('danger','ERROR','Could not edit user, please try again.');
            include_once "users.php";
    }
}
else
   include_once "users.php";

mysqli_close($conn);
?>
  <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM' defer></script>
  <script src='assets/plugins/jquery/jquery.min.js'></script>
  <script src='assets/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
  <script src='assets/plugins/toaster/toastr.min.js'></script>
  <script src='assets/plugins/slimscrollbar/jquery.slimscroll.min.js'></script>
  <script src='assets/plugins/charts/Chart.min.js'></script>
  <script src='assets/plugins/ladda/spin.min.js'></script>
  <script src='assets/plugins/ladda/ladda.min.js'></script>
  <script src='assets/plugins/jquery-mask-input/jquery.mask.min.js'></script>
  <script src='assets/plugins/select2/js/select2.min.js'></script>
  <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
  <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
  <script src='assets/plugins/daterangepicker/moment.min.js'></script>
  <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
  <script src='assets/plugins/jekyll-search.min.js'></script>
  <script src='assets/js/sleek.js'></script>
  <script src='assets/js/chart.js'></script>
  <script src='assets/js/date-range.js'></script>
  <script src='assets/js/map.js'></script>
  <script src='assets/js/custom.js'></script>
</body>
</html>