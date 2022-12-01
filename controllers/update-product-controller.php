<?php
    require_once "../models/connect.php";
    $productId = $_POST["product-id"];
    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productImage =  $_FILES["new-image"]["name"];
    $productPrice =  $_POST["product-price"];
    $categoryId =  $_POST["category"];

    $query = "UPDATE products SET productName='$productName' , productDesc='$productDesc' , productImage='$productImage' , productPrice='$productPrice' , categoryId=$categoryId WHERE id=$productId";
    connect($query);
    move_uploaded_file($_FILES["new-image"]["tmp_name"],"../views/img/".$_FILES["new-image"]["name"]);

    header("location: ../views/admin/product-management.php");
?>