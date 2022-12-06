<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body class="box-border p-0 m-auto w-[1920px] font-['Inter']">
    <header class="w-[1240px] mx-auto flex justify-between">
        <img class="mt-[32px] w-fit" src="../img/logo.png" alt="">
        <div class="menu flex gap-[32px] list-none mt-[51px] ">
            <li><a class=" text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="home.php">Trang Chủ</a></li>
            <li><a class="text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="products.php">Sản Phẩm</a></li>
            <li><a class="text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="#">Về Chúng Tôi</a></li>
            <li><a class="text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="#">Liên Hệ</a></li>
        </div>
        <div class="flex gap-[25px] mt-[48px]">
            <a class="" href="login.php"><button class="h-[28px] w-[105px] border-solid border-[1px] border-[#0066B2] text-[18px] font-[600] text-[#0066B2]">Đăng Nhập</button></a>
            <a class="" href="signin.php"><button class="h-[28px] w-[83px] border-solid border-[1px] border-[#0066B2] text-[18px] font-[600] text-[#0066B2]">Đăng Ký</button></a>
            
        </div>
    </header>
    <img class="mt-[32px]" src="../img/banner.png" alt="">
    <main class="w-[1280px] mx-auto flex gap-[40px] mt-[64px]">
        <div class="left-menu basis-1/4">
                <h5 class="text-[24px] font-[600]">Danh mục</h5>
                <nav class="list-none mt-[32px]">
                    <li><a class="text-[16px] font-[600] text-[#000000] hover:text-[#F26F21]" href="">Danh mục 1</a></li>
                    <li class="mt-[25px]"><a class="text-[16px] font-[600] text-[#000000] hover:text-[#F26F21]" href="">Danh mục 2</a></li>
                    <li class="mt-[25px]"><a class="text-[16px] font-[600] text-[#000000] hover:text-[#F26F21]" href="">Danh mục 3</a></li>
                    <li class="mt-[25px]"><a class="text-[16px] font-[600] text-[#000000] hover:text-[#F26F21]" href="">Danh mục 4</a></li>
                </nav>
        </div>    
        <div class="product-list basis-3/4">
            <div class="search flex border-[#CBD5E0] border-[1px] border-solid rounded-[5px] w-[400px] h-[40px] leading-[40px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0066B2" class="w-6 h-6 my-auto ml-[10px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                <input type="text" name="" class="focus:outline-none placeholder:text-[16px] placeholder:font-[500] placeholder:text-[#CBD5E0]" placeholder="Tìm kiếm" id="">
            </div>
            <div class="product-row grid grid-cols-3 mt-[32px]">
                <div class="card">
                    <img src="../img/product_1.png" alt="">
                    <a href="product-detail.php"><div class="title text-[24px] font-[700] mt-[12px]">Product 1</div></a>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 1</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$100</div>
                </div>
                <div class="card">
                    <img src="../img/product_2.png" alt="">
                    <a href="product-detail.php"><div class="title text-[24px] font-[700] mt-[12px]">Product 2</div></a>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 2</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$200</div>
                </div>
                <div class="card">
                    <img src="../img/product_3.png" alt="">
                    <a href="product-detail.php"><div class="title text-[24px] font-[700] mt-[12px]">Product 3</div></a>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 3</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$300</div>
                </div>
        </div>
        <div class="product-row grid grid-cols-3 mt-[32px]">
                <div class="card">
                    <img src="../img/product_1.png" alt="">
                    <a href="product-detail.php"><div class="title text-[24px] font-[700] mt-[12px]">Product 1</div></a>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 1</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$100</div>
                </div>
                <div class="card">
                    <img src="../img/product_2.png" alt="">
                    <a href="product-detail.php"><div class="title text-[24px] font-[700] mt-[12px]">Product 2</div></a>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 2</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$200</div>
                </div>
                <div class="card">
                    <img src="../img/product_3.png" alt="">
                    <a href="product-detail.php"><div class="title text-[24px] font-[700] mt-[12px]">Product 3</div></a>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 3</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$300</div>
                </div>
        </div>
    </main>
    <footer class="flex justify-between w-[1240px] mx-auto mt-[128px] mb-[41px] border-t-[1px] border-solid border-[rgba(0, 0, 0, 0.1)]">
        <img src="../img/logo.png" class="mt-[32px]" alt="">
        <div class="menu-2 flex gap-[32px] list-none mt-[52px]">
            <li><a class=" text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="#">Home</a></li>
            <li><a class=" text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="#">Products</a></li>
            <li><a class=" text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="#">About Us</a></li>
            <li><a class=" text-[18px] font-[600] leading-[22px] text-[#5D5D5D] hover:text-[#F26F21]" href="#">Contact Us</a></li>
        </div>
    </footer>
</body>
</html>