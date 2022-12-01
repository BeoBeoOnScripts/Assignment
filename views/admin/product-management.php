<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 25%;
        }
        table,th,td{
            border: 1px solid orange;
        }
    </style>
</head>
<body>
    <a href="add-new-product.php"><button>Add New Product</button></a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Desc</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require "../../models/connect.php";
                $query = "SELECT * FROM products";
                $productList = getAll($query);
            ?>
            <?php foreach($productList as $product):?>
                <tr>
                    <td><?php echo $product["id"]?></td>
                    <td><?php echo $product["productName"]?></td>
                    <td><?php echo $product["productDesc"]?></td>
                    <td><img src="<?php echo "../img/".$product["productImage"]?>" alt=""></td>
                    <td><?php echo $product["productPrice"]?></td>
                    <td>
                        <?php
                            $cateId = $product["categoryID"];
                            $query ="SELECT * FROM categories WHERE id=$cateId";
                            $category = getOne($query);
                            echo $category["categoryName"];
                        ?></td>
                    <td>
                    <a href="update-product.php?id=<?php echo $product['id']?>"><button>Update</button></a>
                    <a href="../../controllers/delete-product-controller.php?id=<?php echo $product['id']?>"><button>Delete</button></a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>