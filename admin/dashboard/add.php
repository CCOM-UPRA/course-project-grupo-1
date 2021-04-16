 
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
	include "side-bar.php";
	include_once 'conn.php';

	$link = OpenCon();
	// Query: Selects all the categories in the "categories" table for displaying
    $sql = "SELECT * FROM categories";
	$result = mysqli_query($link, $sql);
	mysqli_close($link);
	?>
	
	<?php

if(isset($_POST['submit'])){
	$link = OpenCon();
	// Gets the data inserted by the user for the new product. 
		//Escape user inputs for security.
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$category = mysqli_real_escape_string($link, $_REQUEST['category']);
	$quantity = mysqli_real_escape_string($link, $_REQUEST['quantity']);
	$weight = mysqli_real_escape_string($link, $_REQUEST['peso']);
	$cost = mysqli_real_escape_string($link, $_REQUEST['cost']);
	$price = mysqli_real_escape_string($link, $_REQUEST['price']);
	$description = mysqli_real_escape_string($link, $_REQUEST['description']);
	$image = basename( $_FILES["product_image"]["name"]);
	$valid = mysqli_real_escape_string($link, $_REQUEST['valid']);


	$target_dir = "../images/product/sm-img/";
	$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {

	$check = getimagesize($_FILES["product_image"]["tmp_name"]);
	if($check !== false) {
		$uploadOk = 1;
	} else {
		alert('danger','ERROR','File is not an image.');
		$uploadOk = 0;
	}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
		alert('danger','ERROR','File already exists');
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["product_image"]["size"] > 500000) {
		alert('danger','ERROR','File is to large to be uploaded');
		$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		alert('danger','ERROR','Only JPG, JPEG, PNG & GIF files are allowed.');
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		alert('danger','ERROR','File was not uploaded.');
	// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
		$image_name = basename( $_FILES["product_image"]["name"]);
		alert('success','IMAGE UPLOADED','The file has been uploaded.');
	} else {
		alert('danger','ERROR','Sorry, there was an error uploading your file, please try again.');
	}
	}
	
	
	// Query: Inserts all the data provided by the user for the new product into the "products" table. The  id for the product is auto-incremented
	$sql = "INSERT INTO `products`(`product_id`, `product_name`, `category_id`, `weight_id`,`cost`,
	 `price`, `inventory_amount`, `photo`, `product_text`, `valid_product`) 
	 VALUES (NULL,'$name','$category','$weight','$cost', '$price','$quantity','$image','$description','$valid')";
	
	// Atempts to run the query and insert the new product into the "products" table
	if(mysqli_query($link, $sql) && $uploadOk != 0){
		
		unset($_POST['submit']);		//Unsets the values for the product to ensure only one product is added
		alert('success','SUCcESS','Product added sucessfuly');			//Notifies the user the product has been succesfuly added
	
	
	} else{
		// Error notification if the query could not be executed
		alert('danger','ERROR','Could not add the product, try again');
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
											<h2>Add New Product</h2>
										</div>
										<div class="card-body">
											<form action="add.php" method="post" enctype="multipart/form-data">
												
											<div class="row">
												<div class="form-group col-md-6">
													<div class="form-group">
														<label for="exampleFormControlInput1">Product Name</label>
														<input type="text" class="form-control" name="name" id="exampleFormControlInput1" required placeholder="">
													</div>			
												</div>	

												<div class="form-group col-md-6">
														<div class="form-group">
																<label for="exampleFormControlPassword">Category</label>
																<select class="form-control" name="category" id="exampleFormControlSelect12" required>
																	<?php
																		//Displayes the categories as ptions in a select input element
																		while($row = mysqli_fetch_assoc($result)) {
																			$id = $row['category_id'];
																			$categotias =  $row['category_name'];
																			echo'
																			<option value="'.$id.'">'.$categotias.'</option>
																			';
																		}
																	?>
																</select>
														</div>
												</div>
											</div>
												

												<div class="row">
													<div class="form-group col-md-6">
															<div class="form-group">
														<label for="exampleFormControlPassword">Weight</label>
															<select class="form-control" name="peso" id="exampleFormControlSelect12" required>
																<option value="0">None</option>
															<?php
																$link = OpenCon();
																// Query: Selects all the wheights and the corespondant id
																$sql="SELECT * FROM weight";
																$result = mysqli_query($link, $sql);
																
																//Displayes the results as ptions in a select input element
																while ($row = mysqli_fetch_assoc($result)) {
																	echo '
																		<option value="'.$row['weight_id'].'">'.$row['weight'].'mg</option>	
																	';
																}
																
															?>
															</select>
															</div>
													</div>	

													<div class="form-group col-md-6">
														<div class="form-group">
															<label for="exampleFormControlSelect12">Quantity</label>
															<input type="number" min="1" name="quantity" step="1" class="form-control" required>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="form-group col-md-6">
														<div class="form-group">
															<label for="exampleFormControlSelect2">Cost</label>
															<input type="number" name="cost" min="0.01" step="0.01" class="form-control" placeholder="Ex. 7.98" required>
														</div>
													</div>	
														
													<div class="form-group col-md-6">
														<div class="form-group">
															<label for="exampleFormControlSelect2">Price</label>
															<input type="number" name="price" min="0.01" step="0.01" class="form-control" placeholder="Ex. 11.98" required>
														</div>
													</div>	
												</div>
												
												
										
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Description</label>
													<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
												</div>

												<div class="row">
												<div class="form-group col-md-4" >
													<label for="exampleFormControlFile1">Product Image</label>
													<input type="file" class="form-control-file" name="product_image" id="product_image" required>
												</div>
												<div class="form-group col-md-4 ml-auto">
												<label for="exampleFormControlPassword">Availability</label>
															<select class="form-control" name="valid" id="exampleFormControlSelect12" required>
																<option value="0">Enabled</option>
																<option value="1">Disabled</option>	
															</select>
												</div>
												</div>

												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default" name="submit">Add</button>
													<button class="btn"><a href="manage-products.php">Back</a></button>
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
