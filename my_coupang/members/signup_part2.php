<?php
include "../inc/session.php";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입_02</title>
    <link rel="stylesheet" type="text/css" href="../css/init.css">
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

    <style type="text/css">
        .redTxt {
            font-size: 14px;
            color: red;
        }

        .green_txt {
            font-size: 14px;
            color: green;
        }
    </style>

    <!-- javascript -->
    <!-- jQuery setup-->
    <script type="text/javascript" src="../js/jquery/jQuery-3.6.1.js"></script>
    <!-- bxslider script -->
    <script type="text/javascript" src="../src/js/jquery.bxslider.js"></script>
    <!-- form script -->
    <script type="text/javascript" src="../js/cupang.js"></script>
    <!-- use jQuery -->
    <script type="text/javascript" src="../js/cupang_jquery.js"></script>

    <script type="text/javascript">
        ///비동기식 아이디 체크 ajax
        function getCont(g_id) {
            /* 이메일 형식 추가 */
            var CHECK_TYPE_EMAIL = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
            var dsp = document.getElementById("dsp");

            if (!CHECK_TYPE_EMAIL.test(g_id)) {
                dsp.innerHTML = '아이디는 이메일 형식으로만 입력 할 수 있습니다.';
                dsp.className = 'redTxt';
            } else {
                var xmlhttp = fncGetXMLHttpRequest();

                // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
                xmlhttp.open('GET', 'id_check_ajax.php?u_id=' + g_id, false);

                xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == '4' && xmlhttp.status == 200) {
                        if (xmlhttp.status == 500 || xmlhttp.status == 404 || xmlhttp.status == 403)
                            alert(xmlhttp.status);
                        else {
                            var txt = xmlhttp.responseText;
                            txt = txt.replace(/\n/g, ""); // 행바꿈 제거
                            txt = txt.replace(/\r/g, ""); // 엔터값 제거
                            txt = txt.replace(/\s+/, ""); // 왼쪽 공백 제거
                            txt = txt.replace(/\s+$/g, ""); // 오른쪽 공백 제거
                            if (txt == 'Y') {
                                dsp.innerHTML = '이미 가입된 아이디(이메일) 입니다.';
                                dsp.className = 'redTxt';
                            } else {
                                dsp.innerHTML = '사용할 수 있는 아이디(이메일) 입니다.';
                                dsp.className = 'green_txt';
                            }
                        }
                    }
                }
            }
            xmlhttp.send();
        }

        function fncGetXMLHttpRequest() {
            if (window.ActiveXObject) {
                try {
                    return new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        return new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e1) {
                        return null;
                    }
                }
                //IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
            } else if (window.XMLHttpRequest) {
                return new XMLHttpRequest();
            } else {
                return null;
            }
        }

        //비밀번호 정규식 체크
        function pwdFormCheck(pwd) {
            //최소 8 자, 하나 이상의 문자, 하나의 숫자 및 하나의 특수 문자 정규식
            var CHECK_TYPE_PWD = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

            var dsp = document.getElementById("dsp_pwd");
            var dsp_ck = document.getElementById("dsp_ck_pwd");
            var g_id = document.getElementById("user_info_id");
            var pwd_val = document.getElementById("user_info_chkPwd").value;

            if (!CHECK_TYPE_PWD.test(pwd)) {
                dsp.innerHTML = '영문/숫자/특수문자를 포함한 8자이상 20자리 이하<br>';
                dsp.className = 'redTxt';
            } else if (pwd == g_id.value) {
                dsp.innerHTML = '비밀번호는 아이디(이메일)와 동일하게 사용할 수 없습니다.';
                dsp.className = 'redTxt';
            } else {
                dsp.innerHTML = '사용 가능한 비밀번호입니다.';
                dsp.className = 'green_txt';
            }
            if (pwd_val) {
                if (pwd_val != pwd) {
                    dsp_ck.innerHTML = '비밀번호가 일치하지 않습니다.';
                    dsp_ck.className = 'redTxt';
                } else {
                    dsp_ck.innerHTML = '비밀번호가 일치합니다.';
                    dsp_ck.className = 'green_txt';
                }
            }
        }

        //비밀번호 확인 체크
        function pwd_check(pwd_check) {
            var dsp_ck = document.getElementById("dsp_ck_pwd");
            var pwd = document.getElementById("user_info_pwd");

            if (pwd_check != pwd.value) {
                dsp_ck.innerHTML = '비밀번호가 일치하지 않습니다.';
                dsp_ck.className = 'redTxt';
            } else {
                dsp_ck.innerHTML = '비밀번호가 일치합니다.';
                dsp_ck.className = 'green_txt';
            }
        }

        //이름 값 있으면
        function nameHasValue(value) {
            if (value) {
                var txt = document.getElementById("dsp_name");
                txt.textContent = " ";
                $("#dsp_name").css({
                    paddingLeft: paddingVal
                });

            } else {
                var txt = document.getElementById("dsp_name");
                txt.textContent = "사용자 이름을 입력하세요.";
                txt.className = "redTxt";
                $("#dsp_name").css({
                    paddingLeft: paddingVal
                });
                user_info_name.focus();
            }
        }

        //생년월일 값 있으면
        function birthHasValue(value) {
            if (value) {
                var txt = document.getElementById("dsp_birth");
                txt.textContent = " ";
                $("#dsp_birth").css({
                    paddingLeft: "0px"
                });

            } else {
                var txt = document.getElementById("dsp_birth");
                txt.textContent = "생년월일을 입력하세요.";
                txt.className = "redTxt";
                $("#dsp_birth").css({
                    paddingLeft: paddingVal
                });
                user_info_birth.focus();
            }
        }

        //휴대폰 값 잇으면
        function mobileHasValue(value) {
            if (value) {
                var txt = document.getElementById("dsp_mobile");
                txt.textContent = " ";
                $("#dsp_mobile").css({
                    paddingLeft: "0px"
                });

            } else {
                var txt = document.getElementById("dsp_mobile");
                txt.textContent = "휴대폰 번호를 입력하세요.";
                txt.className = "redTxt";
                $("#dsp_mobile").css({
                    paddingLeft: paddingVal
                });
                user_info_mobile.focus();
            }
        }
    </script>

    <script>
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
                // 예제를 참고하여 다양한 활용법을 확인해 보세요.
            }
        }).open();
    </script>

    <script type="text/javascript">
        var paddingVal = "67px";
        $(document).ready(function() {
            $("#user_info_id").focusin(function() {
                $("#dsp").css({
                    paddingLeft: paddingVal
                });
            });
            $("#user_info_pwd").focusin(function() {
                $("#dsp_pwd").css({
                    paddingLeft: paddingVal
                });
            });
            $("#user_info_chkPwd").focusin(function() {
                $("#dsp_ck_pwd").css({
                    paddingLeft: paddingVal
                });
            });
            $("#user_info_name").focusin(function() {
                $("#dsp_name").css({
                    paddingLeft: paddingVal
                });
            });
            $("#user_info_birth").focusin(function() {
                $("#dsp_birth").css({
                    paddingLeft: paddingVal
                });
            });
            $("#user_info_mobile").focusin(function() {
                $("#dsp_mobile").css({
                    paddingLeft: paddingVal
                });
            });
        });
    </script>

</head>

<body>
    <div class="wrap">
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../inc/header_part.php" ?>
        <main>
            <h1 class="login_logo"><a href="../index.html">쿠팡</a></h1>
            <section>
                <form action="insert.php" method="POST" onsubmit="return checkForm()">
                    <fieldset>
                        <div class="form_bgBox">
                            <legend>회원가입</legend>
                            <div class="input_user_info">
                                <input type="hidden" name="u_email" value="">
                                <input type="hidden" name="u_email2" value="">
                                <input type="hidden" name="u_pscode" value="">
                                <input type="hidden" name="u_1st_addr" value="">
                                <input type="hidden" name="u_2nd_addr" value="">
                                <ul>
                                    <li>
                                        <label for="user_info_id">아이디</label>
                                        <img src="../images/signup/postimg_59x59.jpg">
                                        <input id="user_info_id" name="u_id" type="text" placeholder="아이디(이메일)*" onkeyup="getCont(this.value)">
                                    </li>
                                    <span id="dsp"></span><span id="err_info_id" class="err_txt"></span>

                                    <li><label for="user_info_pwd">비밀번호</label>
                                        <img src="../images/signup/pw_lockimg_59x59.jpg">
                                        <input id="user_info_pwd" name="u_pwd" type="password" placeholder="비밀번호*" onkeyup="pwdFormCheck(this.value)">
                                    </li>
                                    <span id="dsp_pwd"></span>
                                    <li>
                                        <label for="user_info_chkPwd">비밀번호 확인</label>
                                        <img src="../images/signup/pw_lockcheckimg_59x59.jpg">
                                        <input id="user_info_chkPwd" name="u_chk_pwd" type="password" placeholder="비밀번호 확인*" onkeyup="pwd_check(this.value)">
                                    </li>
                                    <span id="dsp_ck_pwd"></span>
                                    <li>
                                        <label for="user_info_name">사용자 이름</label>
                                        <img src="../images/signup/userimg_59x59.jpg">
                                        <input id="user_info_name" name="u_name" type="text" placeholder="사용자 이름*" onkeyup="nameHasValue(this.value)">
                                    </li>
                                    <span id="dsp_name"></span>
                                    <li>
                                        <label for="user_info_gender">성별</label>
                                        <img src="../images/signup/genderimg_59x59.jpg">
                                        <span class="gentder_txt">남</span><input id="m" name="u_gender" type="radio" value="남">
                                        <span class="gentder_txt">여</span><input id="f" name="u_gender" type="radio" value="여">
                                    </li>
                                    <span id="dsp_gender"></span>
                                    <li>
                                        <label for="user_info_birth">생년월일</label>
                                        <img src="../images/signup/birthimg_59x59.jpg">
                                        <input id="user_info_birth" name="u_birth" type="text" placeholder="생년월일* ex)19940721" onkeyup="birthHasValue(this.value)">
                                    </li>
                                    <span id="dsp_birth"></span>
                                    <li>
                                        <label for="user_info_mobile">휴대폰 번호</label>
                                        <img src="../images/signup/mbimg_59x59.jpg">
                                        <input id="user_info_mobile" name="u_mobile" type="text" placeholder="휴대폰 번호*" onkeyup="mobileHasValue(this.value)">
                                    </li>
                                    <span id="dsp_mobile"></span>
                                    <li>
                                        <label for="user_info_addr">주소</label>
                                        <img src="../images/signup/homeimg_59x59.jpg">
                                        <input id="user_info_addr" type="text" placeholder="주소">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="terms_accept_bgBox">
                            <div class="ckbox_bgbox">
                                <input id="apply_all" class="ckbox_size" type="checkbox" value="" onclick="return checkApply(this)">
                                <p>모두 확인하였으며 (전체)동의 합니다.</p>
                            </div>
                            <p>동의에는 필수 및 선택 목적(광고성 정보 수신 포함)에 대한 동의가 포함되어<br>있으며, 선택 목적의 동의를 거부하시는 경우에도 서비스 이용이 가능합니다.
                                <br><span id="err_aplly" class="err_txt"></span>
                            </p>

                            <div class="ckbox_bgbox2">
                                <ul class="select_opt_box">
                                    <li><input name="ck" id="apply_opt1" type="checkbox" value="">[필수] 만 14세 이상입니다</li>
                                    <li><input name="ck" id="apply_opt2" type="checkbox" value="">[필수] 쿠팡 이용약관 동의</li>
                                    <li><input name="ck" id="apply_opt3" type="checkbox" value="">[필수] 전자금융거래 이용약관 동의</li>
                                    <li><input name="ck" id="apply_opt4" type="checkbox" value="">[필수] 개인정보 수집 및 이용 동의</li>
                                    <li><input name="ck" id="apply_opt5" type="checkbox" value="">[필수] 개인정보 제3자 제공 동의</li>
                                    <li><input name="ck" id="apply_opt6" type="checkbox" value="">[선택] 광고성 목적의 개인정보 수집 및 이용 동의
                                    </li>
                                    <li><input name="ck" id="apply_opt7" type="checkbox" value="">[선택] 광고성 정보 수신 동의</li>
                                    <ul class="select_opt_box2">
                                        <li><input name="ck" id="apply_opt8" type="checkbox" value="">[선택] 이메일 수신 동의</li>
                                        <li><input name="ck" id="apply_opt9" type="checkbox" value="">[선택] SMS,MMS 수신 동의</li>
                                        <li><input name="ck" id="apply_opt10" type="checkbox" value="">[선택] 앱 푸시 수신 동의</li>
                                    </ul>
                                </ul>
                            </div>
                            <button class="signup_btn3" type="submit">동의하고 가입하기</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
        <!-- FOOTER -->
        <?php include "../inc/footer_part.php" ?>
    </div>

</body>

</html>