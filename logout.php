<?php
    include "includes/config.php";
    if(session_destroy()){
        header("location: login.php");
    }
    ?>