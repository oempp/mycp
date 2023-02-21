<?php
include "../inc/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입_01</title>
    <!-- init.css -->
    <link rel="stylesheet" type="text/css" href="../css/init.css">
    <!-- signup css -->  <!-- 순서 고정 중복 css 효과있음 main 어딘가에 -->
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
</head>

<body>
    <div class="wrap">
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../inc/header_part.php" ?>
        <main>
            <section class="signup_1stbgBox">
                <div>
                    <h2>회원가입</h2>
                    <p>coupang.com에 오신것을 환영합니다</p>
                    <p>회원가입하신 후 신세계포인트 및 coupang.com의 다양한 서비스를 이요해보세요.</p>
                </div>
            </section>

            <section class="signup_2ndbgBox">
                <h3>통합회원</h3>
                <div class="under_line"></div>
                <p>쿠팡 통합회원으로 가입하고 더 많은 혜택을 누려보세요!</p>
                <div class="flexBox">
                    <div class="inlineBlock">
                        <img class="inline" src="../images/signup/brth_177x177.jpg" alt="생일쿠폰 이미지">
                        <p class="inline ab_p1">생일쿠폰</p>
                        <p class="inline ab_p2">1년에 한 번씩<br>최대 20만원까지 할인되는<br>10% 생일쿠폰 제공</p>
                    </div>
                    <div class="inlineBlock">
                        <img class="inline" src="../images/signup/mb_177x177.jpg" alt="모바일상품권 이미지">
                        <p class="inline ab_p1">모바일상품권</p>
                        <p class="inline ab_p2">간편한 사용<br>모바일 상품권<br>제휴사 포인트적립</p>
                    </div>
                    <div class="inlineBlock">
                        <img class="inline" src="../images/signup/envet_177x177.jpg" alt="이벤트 이미지">
                        <p class="inline ab_p1">이벤트 참여</p>
                        <p class="inline ab_p2">매주 징행되는<br>다양한 쇼핑 혜택의<br>이벤트 참여가능</p>
                    </div>
                </div>
                <button class="signup_btn" type="button"><a href="signup_part2.php">통합회원가입</a></button>
            </section>

            <section class="signup_2ndbgBox">
                <h3>간편회원</h3>
                <div class="under_line"></div>
                <p>자주 사용하는 이메일주소, SNS아이디로 간편하게 가입하실 수 있습니다.</p>
                <div>
                    <ul class="flexBox">
                        <li><a href="#"><img src="../images/signup/signup_email_132_131.jpg" alt="">
                                <p>이메일</p>
                            </a></li>
                        <li><a href="#"><img src="../images/signup/signup_naver_117x117.jpg" alt="">
                                <p>네이버</p>
                            </a></li>
                        <li><a href="#"><img src="../images/signup/signup_kakao_132_131.jpg" alt="">
                                <p>카카오</p>
                            </a></li>
                        <li><a href="#"><img src="../images/signup/signup_facebook_126x126.jpg" alt="">
                                <p>페이스북</p>
                            </a></li>
                        <li><a href="#"><img src="../images/signup/signup_apple_129x129.jpg" alt="">
                                <p>애플</p>
                            </a></li>
                    </ul>
                </div>
            </section>

            <section class="signup_3rdbgBox">
                <h3>법인회원</h3>
                <div class="under_line"></div>
                <p>법인 사업자등록번호 기준으로 한 개의 아이디만 가입 가능합니다.</p>
                <button class="signup_btn" type="button"><a href="signup_part2.php">법인회원가입</a></button>
            </section>
        </main>
        <!-- ---------------------- FOOTER ------------------------>
        <?php include "../inc/footer_part.php" ?>
    </div>

</body>

</html>