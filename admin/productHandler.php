<?php
include("../partials/connect.php");


$product_Name=$_POST['product_Name'];
$genres=$_POST['genres'];
$rating=$_POST['rating'];
$price=$_POST['price'];
$director=$_POST['director'];
$starring=$_POST['starring'];
$launch_Date=$_POST['launch_Date'];
$description=$_POST['description'];
 
//$category_type=$_POST['category_type'];
/*
$target="../uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);
*/

$sql="INSERT INTO products(product_Name, genres, rating, price, director, starring, launch_Date, description) VALUES('$product_Name','$genres','$rating','$price','$director','$starring','$launch_Date','$description')";

//$sql="INSERT INTO categories(category_genre, category_type) VALUES('$genres','$category_type')";



$connect->query($sql);

?>