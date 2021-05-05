<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $_SESSION["lastProductID"]= $id;
    }
    else{
        header("location: index.php");
    }
?>