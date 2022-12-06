<?php
    require_once "../models/connect.php";
    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productImage = $_FILES["product-image"]["name"];
    $productPrice = $_POST["product-price"];
    $categoryId = $_POST["category"];
    $query = "INSERT INTO products (productName, productDesc, productImage, productPrice, categoryID) VALUES ('$productName','$productDesc','$productImage','$productPrice',$categoryId)";
    move_uploaded_file($_FILES["product-image"]["tmp_name"],"../views/img/".$_FILES["product-image"]["name"]);
    connect($query);
    header("location:../views/admin/product-management.php");
?>