<?php
if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    include_once 'conn.php';
    $link = OpenCon();
    $sql = "UPDATE `products` SET `valid_product`= 1 WHERE `product_id`= '$id'";

    $result = mysqli_query($link, $sql);

    include 'manage-products.php';
    include_once "alerts.html"; 
}
else if (isset($_POST['add'])) {
    $id = $_POST['add'];
    include_once 'conn.php';
    $link = OpenCon();
    $sql = "UPDATE `products` SET `valid_product`= 0 WHERE `product_id`= '$id'";
    $result = mysqli_query($link, $sql);

    include 'manage-products.php';
    include_once "alerts.html";
   
}
elseif (isset($_POST['update_product'])) {
    include "conn.php";
    $link = OpenCon();
    
    $id = mysqli_real_escape_string($link, $_REQUEST['update_product']);
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$category = mysqli_real_escape_string($link, $_REQUEST['category']);
	$quantity = mysqli_real_escape_string($link, $_REQUEST['quantity']);
	$weight_id = mysqli_real_escape_string($link, $_REQUEST['peso']);
	$cost = mysqli_real_escape_string($link, $_REQUEST['cost']);
	$price = mysqli_real_escape_string($link, $_REQUEST['price']);
	$description = mysqli_real_escape_string($link, $_REQUEST['description']);
	$image = mysqli_real_escape_string($link, $_REQUEST['product_image']);
	$valid = mysqli_real_escape_string($link, $_REQUEST['valid']);
     
    //Cheks if the user changes the image, if not the current image stays
    if ($image == '') {
        $sql = "UPDATE `products` SET `product_name`='$name',`category_id`='$category',
        `weight_id`='$weight_id',`price`='$price',`inventory_amount`='$quantity',`inventory_cap`=0,
        `product_text`='$description', `valid_product`='$valid' WHERE `product_id`= '$id'";
    }
    else {
        $sql = "UPDATE `products` SET `product_name`='$name',`category_id`='$category',
        `weight_id`='$weight_id',`price`='$price',`inventory_amount`='$quantity',`inventory_cap`=0,`photo`='$image',
        `product_text`='$description', `valid_product`='$valid' WHERE `product_id`= '$id'";
    }
   
    $result = mysqli_query($link, $sql);
       // Attempt insert query execution
    if(mysqli_query($link, $sql)){
       
        include 'manage-products.php';
        include_once "alerts.html";
    
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
}

else{
    $id = $_POST['edit'];

    include 'side-bar.html';
    include_once 'conn.php';
    $prod_id = $_POST['edit'];
    $link = OpenCon();
    $sql = "SELECT * FROM products WHERE `product_id`= '$id'";

    $result = mysqli_query($link, $sql);

     if (mysqli_num_rows($result) > 0) {
         // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['product_id'];
            $name =  $row['product_name'];
            $category = $row['category_id'];
            $price = $row['price'];
            $weight = $row['weight_id'];
            $price = number_format($price, 2);
            $cost = $row['cost'];
            $description = $row['product_text'];
            $image = $row['photo'];
            $quantity = $row['inventory_amount'];
            $valid = $row["valid_product"];
        }
    }

   
    echo '
    <div class="content-wrapper">
    <div class="content">
                              <div class="col-xl-8 offset-2">
                              <div class="card card-default">
                                  <div class="card-header card-header-border-bottom">
                                      <h2>Edit: <span style="color:orange">Id: '.$id.' Name: '.$name.'</span></h2>
                                  </div>
                                  <div class="card-body">
                                      <form action="edit.php" method="post">
                                        
                                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Product Name</label>
                                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value= '.$name.' required placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="exampleFormControlPassword">Category</label>
                                                <select class="form-control" name="category" id="exampleFormControlSelect12" value= '.$category.' required>';

                                                $sql = "SELECT * FROM categories";
                                                $result = mysqli_query($link, $sql);
                                            
                                                 // Output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $id_cat = $row['category_id'];
                                                    $categotias =  $row['category_name'];
                                                    echo'
                                                    <option value="'.$id_cat.'">'.$categotias.'</option>
                                                    ';
                                                }
                                                    echo '
                                                </select>
                                            </div>
                                        </div>
                                      </div>
                                       
                                            <div class="row">
                                                  <div class="form-group col-md-6">
                                                          <div class="form-group">
                                                      <label for="exampleFormControlPassword">Weight</label>
                                                          <select class="form-control" name="peso" id="exampleFormControlSelect12" value= '.$weight.' required>
                                                              <option value="0">None</option>';																	
                                                             
                                                              $link = OpenCon();
                                                              $sql="SELECT * FROM weight";
                                                              $result = mysqli_query($link, $sql);
                                                              
                                                              while ($row = mysqli_fetch_assoc($result)) {
                                                                  echo '
                                                                      <option value="'.$row['weight_id'].'">'.$row['weight'].'mg</option>	
                                                                  ';
                                                              }
                                                              
                                                        
                                                         echo'  </select>
                                                          </div>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                     <div class="form-group">
                                                        <label for="exampleFormControlSelect12">Quantity</label>
                                                        <input type="number" min="1" name="quantity" step="1" class="form-control" value= '.$quantity.' required>
                                                    </div>
                                                  </div>	
                                            </div>

                                          <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                            <label for="exampleFormControlSelect2">Cost</label>
                                                            <input type="number" name="cost" min="0.01" step="0.01" class="form-control" placeholder="Ex. 11.98" value= '.$cost.' required>
                                                    </div>	
                                                  </div>
                                                  
                                                  <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect2">Price</label>
                                                        <input type="number" name="price" min="0.01" step="0.01" class="form-control" placeholder="Ex. 11.98" value= '.$price.' required>
                                                    </div>
                                                  </div>	
                                          </div>
                                          
                                          
                                  
                                          <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Description</label>
                                              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">'.$description.'</textarea>
                                          </div>
                                          <div class="row">
                                          <div class="form-group col-md-4" >
                                          <label for="exampleFormControlFile1">Product Image</label>
                                          <input type="file" class="form-control-file" name="product_image" id="exampleFormControlFile1" value= '.$image.' >
                                          <p><span class="text-primary">* Leave blank to keep current image</span></p>
                                          </div>
                                          <div class="form-group col-md-4 ml-auto">
												<label for="exampleFormControlPassword">Availability</label>
                                                            <select class="form-control" name="valid" id="exampleFormControlSelect12" required>';
                                                            if ($valid == 0) {
                                                                print ' <option value="0" selected>Enabled</option>
                                                                        <option value="1" >Disabled</option>	
                                                               ';
                                                            }
                                                            else {
                                                                print ' <option value="0" >Enabled</option>
                                                                        <option value="1" selected>Disabled</option>	
                                                                ';
                                                            }
                                        print '             </select>
												</div>
                                          </div>

                                          <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                              <button type="submit" class="btn btn-primary btn-default" name="update_product" value="'.$prod_id.'">Submit</button>
                                              <button type="reset" class="btn btn-secondary btn-default" name="">Clear</button>
                                          </div>
                                      </form>
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
    ';
}
?>
