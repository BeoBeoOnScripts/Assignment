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
    <main>
        <img class="mt-[32px]" src="../img/banner.png" alt="">
        <div class="main-content w-[1240px] mx-auto">
            <h2 class="text-[36px] font-[700] text-[#000000] text-center text-[#3A3A3A] mt-[64px]">Our Products</h2>
            <div class="gallery-1 mt-[48px] grid grid-cols-4 gap-[40px]">
                <div class="card">
                    <img src="../img/product_1.png" alt="">
                    <div class="title text-[24px] font-[700] mt-[12px]">Product 1</div>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 1</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$100</div>
                </div>
                <div class="card">
                    <img src="../img/product_2.png" alt="">
                    <div class="title text-[24px] font-[700] mt-[12px]">Product 2</div>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 2</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$200</div>
                </div><div class="card">
                    <img src="../img/product_3.png" alt="">
                    <div class="title text-[24px] font-[700] mt-[12px]">Product 3</div>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 3</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$300</div>
                </div><div class="card">
                    <img src="../img/product_4.png" alt="">
                    <div class="title text-[24px] font-[700] mt-[12px]">Product 4</div>
                    <div class="descript text-[18px] font-[400] text-[#898989] mt-[8px]">description 4</div>
                    <div class="price text-[20px] font-[600] text-[#F54748] mt-[5px]">$400</div>
                </div>
            </div>
            <div class="butt-show text-center mt-[64px]">
            <a class=""href=""><button class=" h-[48px] w-[245px] border-solid border-[1px] border-[#F26F21] text-[18px] font-[700] text-[#F26F21]">Show More</button></a>
        </div>
            <h2 class="text-[36px] font-[700] text-[#000000] text-center text-[#3A3A3A] mt-[64px]">Tips & Tricks</h2>
            <div class="gallery-2 grid grid-cols-3 gap-[40px] mt-[32px]">
                <div class="card-2">
                    <img src="../img/tip_1.png" alt="">
                    <div class="title-2 text-[24px] font-[600] mt-[32px] text-[#3A3A3A]">How to create a living room to love</div>
                    <div class="time text-[14px] font-[400] mt-[12px] text-[#898989]">20 jan 2020</div>
                </div>
                <div class="card-2">
                    <img src="../img/tip_2.png" alt="">
                    <div class="title-2 text-[24px] font-[600] mt-[32px] text-[#3A3A3A]">Solution for clean look working space</div>
                    <div class="time text-[14px] font-[400] mt-[12px] text-[#898989]">10 jan 2020</div>
                </div><div class="card-2">
                    <img src="../img/tip_3.png" alt="">
                    <div class="title-2 text-[24px] font-[600] mt-[32px] text-[#3A3A3A]">Make your cooking activity more fun with good setup</div>
                    <div class="time text-[14px] font-[400] mt-[12px] text-[#898989]">20 jan 2020</div>
                </div>
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