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
<main class="w-[856px] mx-auto mt-[179px] grid grid-cols-2 gap-[64px]">
    <img class="mt-[15px]" class="" src="../img/log.png" alt="">
    <div class="right w-[350px]">
    <p class="text-[30px] font-[700] text-[#37A9CD] uppercase text-center">Đăng nhập</p>
    <form class="mt-[23px] gap-[11px]" action="login.php" method="POST">
        <label class="text-[16px] font-[400] text-[#4A5568]" for="username">Email</label> <br>
        <input type="text" placeholder="John.snow@gmail.com" class="mt-[11px] w-[350px] h-[50px] placeholder:text-[14px] placeholder:font-[400] placeholder:text-[#C4C4C4] focus:outline-none leading-[50px] pl-[20px] border-[1px] border-solid border-[#37A9CD] rounded-[5px]"  name="username"> <br> <br>
        <label class="text-[16px] font-[400] text-[#4A5568]" class="" for="password">Mật Khẩu</label> <br>
        <input type="password" placeholder="*********" class="mt-[11px] w-[350px] h-[50px] placeholder:text-[14px] placeholder:font-[400] placeholder:text-[#C4C4C4] focus:outline-none leading-[50px] pl-[20px] border-[1px] border-solid border-[#37A9CD] rounded-[5px]" name="password"> <br> <br>
        <a href=""><button class="w-[350px] h-[50px] bg-[#37A9CD] text-[16px] font-[700] text-[#FFFFFF] leading-[50px] my-auto rounded-[5px]" type="submit" name="btn-login">Đăng nhập ngay</button></a> <?php
        session_start();
        include "../../models/connect.php";
        $query = "SELECT * FROM users";
        $users = getAll($query);
        // echo '<pre>';var_dump($users);die;
        $check = 0;
        foreach($users as $value){
            if(isset($_POST["btn-login"])){
                if(!$_POST["username"] == "" && !$_POST["password"] == ""){
                    if($_POST["username"] == $value["username"] && $_POST["password"] == $value["password"]){
                        $_SESSION["fullname"] = $value["fullname"];
                        header("location:../admin/dash-board.php");
                    }
                    else $check = 1;
                }else $check = 2;
            }
        }
        if($check == 1) echo 'Sai tài khoản hoặc mật khẩu!!!';
        if($check == 2) echo 'Không để trống!!!';
    ?>
    <br> <br>
        <a href=""><button class="text-center flex w-[350px] h-[50px] bg-[#2D3748] text-[16px] font-[700] text-[#FFFFFF] leading-[50px] my-auto rounded-[5px]" type="submit" name="btn-login"><img class="ml-[35px] my-auto mr-[11px]" src="../img/google.png" alt="">Đăng nhập với tài khoản Google</button></a>
    </form>
    <div class="re-password mt-[32px]">
        <a href=""><p class="text-[14px] font-[400] text-[#37A9CD] hover:text-[#F26F21] text-center">Quên mật khẩu?</p></a>
        <div class="flex mt-[15px] ml-[52px]"><p class="text-[14px] font-[400]">Bạn chưa có tài khoản?</p><a href=""><p class="text-[#37A9CD] hover:text-[#F26F21] text-[14px] font-[400] ">Đăng ký ngay</p></a></div>
        
    </div>
    </div>
    
</main>

</body>
</html>