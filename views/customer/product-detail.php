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
    <main class="w-[1280px] mx-auto grid grid-cols-2 gap-[40px] mt-[94px] mb-[319px]">
        <div class="content mt-[41px]">
            <p class="font-black text-[40px] text-[##111928]">Big and Juicy Wagyu Beef Cheeseburger</p>
            <div class="price text-[40px] text-[#F54748] font-[600] mt-[20px]">$30</div>
            <div class="detail text-[18px] text-[##111928] font-[400] mt-[30px]">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</div>
            <div class="buy mt-[32px] flex gap-[20px]">
                <input type="text" class="w-[180px] h-[42px] border-[1px] border-[rgba(0, 0, 0, 0.1)] border-solid focus:outline-none rounded-[5px] ">
                <a href=""><button class="w-[110px] h-[42px] bg-[#111928] rounded-[5px] text-[14px] text-[#FFFFFF] font-[600]" >Add To Cart</button></a>
            </div>
        </div>
        <div class="image">
            <img src="../img/product-detail.png" alt="">
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