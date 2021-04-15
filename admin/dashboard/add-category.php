 
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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>

<?php
  include "side-bar.php";
  include "alerts_handeler.php";
  include 'conn.php';
?>

<?php
   if(isset($_POST['category_name'])) 
   {
        $link = OpenCon();
        
      //Get category name
        $category_name = mysqli_real_escape_string($link, $_REQUEST['category_name']);
        
        
        // Query: Iserts a new row in the "categories" table  passing a null id that is added while autoincrement and the name of the new category
        $sql_user = "INSERT INTO `categories`(`category_id`,`category_name`) VALUES (Null,'$category_name')";
        
        if(mysqli_query($link, $sql_user)){
          alert('success','SUCCESS','Category added.');     //Success alert is displayed when the category is inserted 
        }
        else{
            // Displays error alert when faild to connect to the database
            alert('danger','ERROR','Category could not be added.');
        }
        // Close connection
        mysqli_close($link);
    }
    ?>


<!-- Modal that displays the form for adding the new category -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="add-category.php" method="post">
      <label class="from-control">Category Name</label>
        <input type="text" class="form-control" name="category_name" value="">    <!-- Holds the value for the category name -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                   
                   <div class="col">
                       <h2>Categories</h2>
                   </div>
                   <div class="col"> 
                   <button type="button" style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Insert Category</button>
                   </div>
                    <br><br>
                </div>
                <div class="card-body">
                    <table id="dtBasicExample" class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
    $link = OpenCon();

    // Query: Selects all the categories in the "categories" table for displaying
    $sql = "SELECT * FROM categories";
    
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
         // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        //Prints the id of the category and it's category name as table data
        print '
        <tr>
        <td scope="row">'.$row['category_id'].'</td>
        <td>'.$row['category_name'].'</td>
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
