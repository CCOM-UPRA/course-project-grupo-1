<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>PharmaSys - Users</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body>

    <?php 
    include "side-bar.php";
    ?>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Users</h2>
                </div>
                <div class="card-body">
                    <!-- <p class="mb-5">Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or <code>.thead-dark</code> to make &lt;thead&gt;s appear light or dark gray. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#table-head-options" target="_blank"> more details.</a></p> -->
                    <table id="dtBasicExample" class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Account Date</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                      

include_once 'conn.php';
    $link = OpenCon(); // Opens connection to the database

    // Gets the users data from the database
    $sql = "SELECT *  FROM users";
    $result = mysqli_query($link, $sql);


    if (mysqli_num_rows($result) > 0) {
         // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['user_id'];
            $name =  $row['first_name'];
            $last = $row['last_name'];
            $email = $row['email'];
            $account_age = $row['account_date'];
            $birth_date = $row['b_date'];

            //Calculates the age of the user given the current date and the birth date of the user
            $age = date_diff(date_create($birth_date), date_create('today'))->y;

            //Determines the roles
            $role = $row['role'];
            switch ($role) {
              case '0':
                $role = 'Admin';
                break;

              case '1':
              $role = 'Customer';
              break;
            }
            //Determines the status
            $status = $row['status'];
            switch ($status) {
              case '0':
                $status = 'Active';
                break;

              case '1':
              $status = 'Pending';
              break;

              case '2':
              $status = 'Inactive';
              break;
            }
//Prints out a table with the data of the user
  echo '
      <tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$last.'</td>
        <td>'.$email.'</td>
        <td>'.$age.'</td>
        <td>'.$account_age.'</td>
        <td>'.$role.'</td>
        <td>'.$status.'</td>
        
        <form action="edit-user.php" method="get">
        <td><button type="submit" class="btn btn-outline-danger  btn-sm" name="edit" value="'.$id.'">Edit</button></td>
        </form>
        </tr>
        ';
          
  
 
          }
      }
      ?>

                        </tbody>
                    </table>
                </div>
            </div>
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

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable({

        });
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <!-- Print functionality -->
    <script>
    function myFunction() {
        window.print();
    }
    </script>
</body>

</html>