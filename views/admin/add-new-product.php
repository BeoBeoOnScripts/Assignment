
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="../../controllers/add-new-product-controller.php" method="POST" enctype="multipart/form-data" class="w-[500px] m-auto">
        <input type="text" name="product-name" placeholder="Product Name" class="w-full border mt-8">
        <textarea name="product-desc" id="" cols="30" rows="10" placeholder="Product Desc" class="w-full border mt-8"></textarea>
        <input type="file" name="product-image" class="w-full border mt-8">
        <input type="text" name="product-price" placeholder="Product Price" class="w-full border mt-8">
        <select name="category" id=""  class="w-full border mt-8">
            <?php
            require_once "../../models/connect.php";
            $query = "SELECT * FROM categories";
            $categoryList = getAll($query);
            ?>
            <?php foreach($categoryList as $cate):?>
                <option value="<?php echo $cate["id"]?>"><?php echo $cate["categoryName"]?></option>
            <?php endforeach?>
        </select>
        <button class="w-full bg-green-700 text-white mt-8">Add New</button>
    </form>
</body>

</html>