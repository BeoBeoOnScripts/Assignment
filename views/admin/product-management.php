<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Nunito">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php session_start();?>
<body class="w-[1920px] min-h-[1363px] mx-auto p-0 box-border flex">
<div class="menu w-[292px] border-r-[1px] border-solid border-[#CBD5E0]">
        <img class="mx-auto pt-[20px]" src="../img/logo.png" alt="">
        <nav class="list-none mt-[40px] ml-[18px]">
        <li class=" h-[54px] flex text-[16px] font-[400] leading-[54px] text-[#000000] hover:text-[#4A4A4A]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-[11px]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <a href="dash-board.php">Dashboard</a>
        </li>
        <li class="h-[54px] flex text-[16px] font-[400] leading-[54px] text-[#000000] hover:text-[#4A4A4A]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-[11px]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <a href="product-management.php">Quản lý sản phẩm</a>
        </li>
        <li class="h-[54px] flex text-[16px] font-[400] leading-[54px] text-[#000000] hover:text-[#4A4A4A]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  my-auto mr-[11px]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <a href="user-management.php">Quản lý user</a>
        </li>
        <li class="h-[54px] flex text-[16px] font-[400] leading-[54px] text-[#000000] hover:text-[#4A4A4A]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-[11px]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <a href="">Quản lý danh mục</a>
        </li>
        <li class="h-[54px] flex text-[16px] font-[400] leading-[54px] text-[#000000] hover:text-[#4A4A4A]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-[11px]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
        </svg>
        <a href="">Thống kê</a>
        </li>
        </nav>
    </div>
    <div class="content">
    <header class="flex justify-end text-[14px] font-[400] mt-[36px] text-[#8D8D8D]">
         Xin chào, <p class="text-[#1E74A4]"><?php echo $_SESSION["fullname"]?></p>
         <a class="" href="../../controllers/logout.php"><button class="h-[22px] w-[70px] border-solid border-[1px] border-[#0066B2] text-[12px] font-[600] text-[#0066B2] ml-[10px] leading-[22px]">Đăng Xuất</button></a>
        </header>
        <main>
            <div class="banner bg-[url('../img/manage.png')] w-[1563px] h-[240px] ml-[32px] text-center text-[32px] font-[700] text-[#ffffff] leading-[240px] mt-[71px]">
            Quản lý sản phẩm
            </div>
            <div class="mt-[48px] flex justify-between ml-[32px]">
            <p class="text-[20px] font-[700] text-[#000000]">Danh sách sản phẩm</p>
            <div class="but flex">
            <div class="search flex w-[280px] h-[40px] leading-[40px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0066B2" class="w-6 h-6 my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                <input type="text" name="" class="ml-[10px] focus:outline-none placeholder:text-[16px] placeholder:font-[500] placeholder:text-[#CBD5E0]" placeholder="Aspen Weste" id="">
            </div>  
                <a href="add-new-product.php"><button class="text-[14px] font-[400] text-[#FFFFFF] w-[132px] h-[39px] leading-[39px] text-center bg-[#38A169] rounded-[5px]">Add New Product</button></a>
            </div>
            </div>
            
    <table class="rounded-[5px] w-[1563px] ml-[32px] border-solid border-[1px] border[#5B5B5B] mt-[25px]">
        <thead class="h-[36px] bg-[#4A4A4A] leading-[36px] text-[12px] font-[600]">
            <tr class="">
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">#</th>
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">Product Name</th>
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">Product Desc</th>
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">Product Image</th>
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">Product Price</th>
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">Category</th>
                <th class="w-[260px] text-left pl-[12px] text-[#FFFFFF]">Action</th>
            </tr>
        </thead>
        <tbody class="text-[14px] font-[400]">
            <?php
                require "../../models/connect.php";
                $query = "SELECT * FROM products";
                $productList = getAll($query);
            ?>
            <?php foreach($productList as $product):?>
                <tr>
                    <td class="border-solid border-[1px] border[#5B5B5B] h-[61px] text-left pl-[12px] text-[#000000] "><?php echo $product["id"]?></td>
                    <td class="border-solid border-[1px] border[#5B5B5B] h-[61px] text-left pl-[12px] text-[#000000] "><?php echo $product["productName"]?></td>
                    <td class="border-solid border-[1px] border[#5B5B5B] h-[61px] text-left pl-[12px] text-[#000000] "><?php echo $product["productDesc"]?></td>
                    <td class="border-solid border-[1px] border[#5B5B5B]"><img class="h-[44px] pl-[12px]" src="<?php echo "../img/".$product["productImage"]?>" alt=""></td>
                    <td class="border-solid border-[1px] border[#5B5B5B] h-[61px] text-left pl-[12px] text-[#000000] "><?php echo $product["productPrice"]?></td>
                    <td class="border-solid border-[1px] border[#5B5B5B] h-[61px] text-left pl-[12px] text-[#000000] ">
                        <?php
                            $cateId = $product["categoryID"];
                            $query ="SELECT * FROM categories WHERE id=$cateId";
                            $category = getOne($query);
                            echo $category["categoryName"];
                        ?></td>
                    <td class="border-solid border-[1px] border[#5B5B5B] h-[61px] text-left text-[#FFFFFF] text-center">
                    <a href="update-product.php?id=<?php echo $product['id']?>"><button class="w-[82px] h-[39px] bg-[#1E74A4] rounded-[5px] mr-[12px]">Update</button></a>
                    <a href="../../controllers/delete-product-controller.php?id=<?php echo $product['id']?>"><button class="w-[82px] h-[39px] bg-[#AC3131] rounded-[5px]">Delete</button></a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
        </main>
    </div>
</body>
</html>