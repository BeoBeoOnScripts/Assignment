<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<main class="w-[856px] mx-auto mt-[179px] grid grid-cols-2 gap-[64px] mb-[200px]">
    <img class="mt-[50px]" class="" src="../img/log.png" alt="">
    <div class="right w-[350px]">
    <p class="text-[30px] font-[700] text-[#F26F21] uppercase text-center">Đăng ký</p>
    <form action="../../controllers/sign-in-controller.php" class="mt-[23px] gap-[11px]" action="" method="POST" enctype="multipart/form-data">
        <label class="text-[16px] font-[400] text-[#4A5568]" for="fullname">Họ và tên</label> <br>
        <input type="text" placeholder="Nguyễn Hoàng Tiến" class="mt-[11px] w-[350px] h-[50px] placeholder:text-[14px] placeholder:font-[400] placeholder:text-[#C4C4C4] focus:outline-none leading-[50px] pl-[20px] border-[1px] border-solid border-[#F26F21] rounded-[5px]"  name="fullname"> <br> <br>
        <label class="text-[16px] font-[400] text-[#4A5568]" for="username">Email</label> <br>
        <input type="text" placeholder="John.snow@gmail.com" class="mt-[11px] w-[350px] h-[50px] placeholder:text-[14px] placeholder:font-[400] placeholder:text-[#C4C4C4] focus:outline-none leading-[50px] pl-[20px] border-[1px] border-solid border-[#F26F21] rounded-[5px]"  name="username"> <br> <br>
        <label class="text-[16px] font-[400] text-[#4A5568]" class="" for="password">Mật Khẩu</label> <br>
        <input type="password" placeholder="*********" class="mt-[11px] w-[350px] h-[50px] placeholder:text-[14px] placeholder:font-[400] placeholder:text-[#C4C4C4] focus:outline-none leading-[50px] pl-[20px] border-[1px] border-solid border-[#F26F21] rounded-[5px]" name="password"> <br> <br>
        <label class="text-[16px] font-[400] text-[#4A5568]" class="" for="re-password">Nhập lại mật khẩu</label> <br>
        <input type="password" placeholder="*********" class="mt-[11px] w-[350px] h-[50px] placeholder:text-[14px] placeholder:font-[400] placeholder:text-[#C4C4C4] focus:outline-none leading-[50px] pl-[20px] border-[1px] border-solid border-[#F26F21] rounded-[5px]" name="re-password"> <br> <br>
        <a href=""><button class="w-[350px] h-[50px] bg-[#F26F21] text-[16px] font-[700] text-[#FFFFFF] leading-[50px] my-auto rounded-[5px]" type="submit" name="btn-login">Đăng ký</button></a>
    </form>
    </div>
    </div>
</main>
</body>
</html>