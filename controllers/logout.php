<?php
    session_start(); 
    session_destroy();
    header("location:../views/customer/login.php");
?>