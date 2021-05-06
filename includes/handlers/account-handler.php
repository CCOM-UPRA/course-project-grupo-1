<?php

    $id = $_SESSION['userLoggedIn'];
    $query =  "SELECT * FROM user WHERE userID = '$id'";
	$result_user_basic_info = mysqli_query($connect,$query);
    $row_user_info = mysqli_fetch_assoc($result_user_basic_info);

    $query = "SELECT * FROM address WHERE userID = '$id'";
    $resultAddress = mysqli_query($connect, $query);
    $row_user_defaults = mysqli_fetch_assoc($resultAddress);

?>