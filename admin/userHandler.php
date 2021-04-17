<?php
include("../partials/connect.php");

if(isset($_POST['submit'])){
    
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


}
$connect->query($sql);


?>