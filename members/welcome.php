<?php
include "../inc/session.php";
$u_id = $_GET["u_id"];
$u_name = $_GET["u_name"];
$reg_date = date("y-m-d");
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가입완료</title>
    <!-- init.css -->
    <link rel="stylesheet" type="text/css" href="../css/init.css">
    <!-- signup css -->
    <!-- 순서 고정 중복 css 효과있음 main 어딘가에 -->
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <!-- header.css -->
    <link rel="stylesheet" type="text/css" href="../header_style.css">
    <!-- main.css -->
    <link rel="stylesheet" type="text/css" href="../css/main_style.css">
    <!-- maincategory.css -->
    <link rel="stylesheet" type="text/css" href="../css/main_category_list.css">
    <!-- login.css -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- user sevice.css -->
    <link rel="stylesheet" type="text/css" href="../css/user_service.css">
    <!-- mypage.css -->
    <link rel="stylesheet" type="text/css" href="../css/mypage.css">

    <!-- javascript -->
    <!-- jQuery setup-->
    <script type="text/javascript" src="../js/jquery/jQuery-3.6.1.js"></script>
    <!-- bxslider script -->
    <script type="text/javascript" src="../src/js/jquery.bxslider.js"></script>
    <!-- form script -->
    <script type="text/javascript" src="../js/cupang.js"></script>
    <!-- use jQuery -->
    <script type="text/javascript" src="../js/cupang_jquery.js"></script>

    <style type="text/css">
        .wecome_bg {

            margin: 320px auto;
            padding: 30px 0;
            width: 600px;
            height: 450px;
            border: 1px solid black;
        }

        .complt_txt {
            font-size: 40px;
            text-align: center;
            margin-bottom: 60px;
        }

        .lab_txt {
            display: inline-block;
            font-size: 20px;
            width: 200px;

        }

        .center_txt {
            width: 400px;
            height: auto;
            margin: 20px auto;
            padding: 10px;
            border-bottom: 1px solid #b4b4b4;
        }

        .center_txt2 {
            width: 400px;
            height: auto;
            margin: 80px auto 40px;
            text-align: center;
        }

        .btn_style1,
        .btn_style2 {
            display: inline-block;
            width: 150px;
            height: 40px;
            line-height: 40px;
            margin: 10px;
        }

        .btn_style1 {
            color: white !important;
            background-color: #50A3D9;
        }

        .btn_style2 {
            
            border: 1px solid #50A3D9;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../inc/header_part.php" ?>

        <main>
            <div class="wecome_bg">
                <p class="complt_txt">쿠팡 가입을 환영합니다.</p>
                <p class="center_txt"><span class="lab_txt">아이디(이메일)</span> <span><?php echo $u_id ?></span></p>
                <p class="center_txt"><span class="lab_txt">이름</span> <span><?php echo $u_name ?></span></p>
                <p class="center_txt"><span class="lab_txt">가입일</span> <span><?php echo $reg_date ?></span></p>
                <p class="center_txt2">
                    <a href="../index.php" class="btn_style1">확인</a>
                    <a href="../login/login.php" class="btn_style2">로그인 하기</a>
                </p>
            </div>
        </main>

    </div>
    <!-- FOOTER -->
    <?php include "../inc/footer_part.php" ?>
</body>

</html>