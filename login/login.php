<?php
include "../inc/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
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
            <h2 class="main_logintxt">로그인</h2>
            <section class="main_loginbox">
                <div class="sub_logo">
                    <h2 class="hidden">쿠팡로고</h2>
                </div>
                <form action="login_ok.php" type="" method="post" class="main_formbox">
                    <div class="login_id_inputbox">
                        <label for="user_id"></label>
                        <input type="text" name="u_id" id="user_id" value="" placeholder="아이디(이메일)">
                    </div>
                    <div class="login_pw_inputbox">
                        <label for="user_id"></label>
                        <input type="password" name="u_pwd" id="user_pwd" value="" placeholder="비밀번호">
                    </div>

                    <p class="check_loging">
                        <label for="keep_login_check"></label>
                        <input type="checkbox" id="keep_login_check" value=""> 로그인 상태 유지
                    </p>

                    <div class="find_infobox">
                        <p><a href="../#">아이디 찾기</a></p>
                        <p class="between_bar"><a href="../#">비밀번호 찾기</a></p>
                        <p><a href="../#">회원가입</a></p>
                    </div>

                    <div class="login_btn">
                        <button type="submit">로그인</button>
                    </div>
                    <div class="only_pos">
                        <hr class="or_line">
                        <p class="or_txt">또는</p>
                    </div>

                    <div class="sns_loginbox">
                        <ul>
                            <li><a href="../#"><img src="../images/login/naver_sns_59x59.jpg" alt=""><span class="sns_navertxt">네이버 이메일 로그인</span></a></li>
                            <li>
                                <a href="../#"><img src="../images/login/kakao_sns_64x64.png"><span class="sns_kakaotxt">카카오톡
                                        아이디 로그인</span></a>
                            </li>
                            <li>
                                <a href="../#"><img src="../images/login/facebook_sns_63x63.png"><span class="sns_facebooktxt">페이스북 아이디 로그인</span></a>
                            </li>
                            <li>
                                <a href="../#"><img src="../images/login/apple_sns_64x64.png"><span class="sns_appletxt">애플
                                        아이디 로그인</span></a>
                            </li>
                        </ul>
                    </div>
                </form>
            </section>
        </main>
        <!-- FOOTER -->
        <?php include "../inc/footer_part.php" ?>
    </div>
</body>

</html>