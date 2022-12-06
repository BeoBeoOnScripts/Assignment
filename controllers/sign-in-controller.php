<?php
    require_once "../models/connect.php";
    $fullName = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "INSERT INTO users (fullname, username, password) VALUES ('$username',' $password','$fullName')";
    connect($query);
    header("location:../views/customer/login.php");
?>