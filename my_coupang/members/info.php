<?php
//세션값 가져오기
include "../inc/session.php";
//로그인 한 사용자인지 체크 아니면 리턴 false
include "../inc/login_check.php";
//DB에 연결
include "../inc/dbcon.php";
//쿼리 작성
$sql = "select * from members where idx='$s_idx';";
//쿼리 전송
$result = mysqli_query($dbcon, $sql);
//DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보</title>

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
        $(document).ready(function() {
            $("input").focusin(function() {
                $(this).css({
                    border: "2px solid blue"
                });
            })
            $("input").focusout(function() {
                $(this).css({
                    border: "2px solid #969696"
                });
            })
        });
    </script>

    <script type="text/javascript">
        function edit_formCheck() {
            var user_name = document.getElementById("user_name");
            var user_id = document.getElementById("user_id");
            var user_ck_id = document.getElementById("user_ck_id");
            var user_pwd = document.getElementById("user_pwd");
            var user_ck_pwd = document.getElementById("user_ck_pwd");
            var user_tel = document.getElementById("user_tel");
            var user_email1 = document.getElementById("user_email1");
            var user_email2 = document.getElementById("user_email2");
            var apply = document.getElementById("apply");

            //숫자만 나열인지 검사 // 정규식 <-검색해서 사용
            var NUM_CHECK = /^[0-9]+$/g;

            const MAX_STRING_LENGTH = 12;
            const MIN_STRING_LENGTH = 4;
            const MAX_NUM_LENGTH = 12;
            const MIN_NUM_LENGTH = 4;

            /* 비밀번호 */
            //비밀번호 값이 없을때
            if (!user_pwd.value) {
                var txt = document.getElementById("err_pwd");
                txt.textContent = "비밀번호를 입력하세요";
                user_pwd.focus();
                return false;
            }

            //비밀번호 값이 있을때 스트링 체크
            if (user_pwd.value) {
                //스트링 갯수 체크 
                if (user_pwd.value.length < MIN_NUM_LENGTH) {
                    var txt = document.getElementById("err_pwd");
                    txt.textContent = "네글자 이상 입력하세요";
                    user_pwd.focus();
                    return false;
                }
                if (user_pwd.value.length > MAX_NUM_LENGTH) {
                    var txt = document.getElementById("err_pwd");
                    txt.textContent = "열두글자 이하로 입력하세요";
                    user_pwd.focus();
                    return false;
                }
                //숫자만 입력 (임시)
                if (!NUM_CHECK.test(user_pwd.value)) {
                    var txt = document.getElementById("err_pwd");
                    txt.textContent = "숫자만 입력하세요";
                    user_pwd.focus();
                    return false;
                }
            }

            //비밀번호 체크
            if (user_pwd.value != user_ck_pwd.value) {
                var txt = document.getElementById("err_ck_pwd");
                txt.textContent = "비밀번호가 일치하지 않습니다";
                user_ck_pwd.focus();
                return false;
            }


            /* 이름 */
            //이름값이 없을때
            if (!user_name.value) {
                var txt = document.getElementById("err_name");
                txt.textContent = "이름을 입력하세요";
                //alert("이름을 입력하세요");
                user_name.focus();
                return false;
            }

            //이름 값이 있을때 스트링 체크
            if (user_name.value) {
                //스트링 갯수 체크 
                if (user_name.value.length < 1) {
                    var txt = document.getElementById("err_name");
                    txt.textContent = "한글자 이상 입력하세요";
                    user_name.focus();
                    return false;
                }
                if (user_name.value.length > MAX_STRING_LENGTH) {
                    var txt = document.getElementById("err_name");
                    txt.textContent = "열두글자 이하로 입력하세요";
                    user_name.focus();
                    return false;
                }
            }

        }

        //아이디 중복확인 팝업창
        function chkId() {
            //필요 인자 3개
            //window.open("팝업될 문서 경로", "팝업 되었을 때의 이름(생략가능)", "옵션")
            window.open("id_search.html", "width=300px height=300px")

        }

        //이메일 선택
        function selectEmail() {
            var select_check = document.getElementById("select_check");

            // 인덱스 불러오기 // 숫자로 불러옴
            //user_email2.value = select_check.options.selectedIndex;

            //for (var i = 0; i < 4; i++) {
            //    if (i == select_check.options[i].value) {
            //        user_email2.value = select_check.options[i].value;
            //    }
            //}

            user_email2.value = select_check.value;
            //user_email2.value = select_check.sel.options[select_check.options.selectedIndex].value;
        }

        // 주소 검색
        function searchAddres() {
            window.open("adress_search.html", "width=300px height=300px")
        }

        //회원 탈퇴
        function mem_del() {
            //confirm 확인 창 띄우기        
            var rtn_val = confirm("정말 탈퇴 하시겠습니까?")
            if (rtn_val) {
                location.href = "member_delete.php?g_idx=<?php echo $array['idx']; ?>";
            } else {

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

            /* 비밀번호 변경 시 값 있을때만 */



            /* 비밀번호 변경 시 값 있을때만 */
            if (pwd) {
                if (!CHECK_TYPE_PWD.test(pwd)) {
                    dsp.innerHTML = '영문/숫자/특수문자를 포함한 8자이상 20자리 이하<br>';
                    dsp.className = 'redTxt';
                }
                /*                 
                                else if (pwd == <?php echo $s_name; ?>) {
                                    dsp.innerHTML = '비밀번호는 아이디(이메일)와 동일하게 사용할 수 없습니다.<br>';
                                    dsp.className = 'redTxt';
                                } */
                else {
                    dsp.innerHTML = '사용 가능한 비밀번호입니다.<br>';
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
            } else dsp.innerHTML = "";


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

        //비밀번호 확인 체크
        function pwd_check(pwd_check) {
            var dsp_ck = document.getElementById("dsp_ck_pwd");
            var pwd = document.getElementById("user_info_pwd");

            if (pwd_check) {
                if (pwd_check != pwd.value) {
                    dsp_ck.innerHTML = '비밀번호가 일치하지 않습니다.';
                    dsp_ck.className = 'redTxt';
                } else {
                    dsp_ck.innerHTML = '비밀번호가 일치합니다.';
                    dsp_ck.className = 'green_txt';
                }
            } else {
                dsp_ck.innerHTML = "";
            }
        }

    </script>

<script type="text/javascript">
        var paddingVal = "185px";
        $(document).ready(function() {

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
        });
    </script>

    <!-- CSS -->
    <style type="text/css">
        input {
            outline: none;
            border: 2px solid #969696;
        }

        .redTxt {
            font-size: 14px;
            color: red;
        }

        .green_txt {
            font-size: 14px;
            color: green;
        }
    </style>

    <style type="text/css">
        .top_txtBox,
        .body_txtBox {
            width: 1280px;
            margin: auto;
        }

        .body_txtBox {
            font-size: 20px;
            border-bottom: 1px solid black;

        }

        .est_h2 {
            border-bottom: 1px solid black;
        }

        .est_txt {
            border-bottom: 1px solid black;
        }

        legend {
            text-indent: -9999px;
        }


        .fdset_bg {
            border-style: none;
            width: 800px;
            height: auto;
            background-color: rgb(255, 243, 213);
            margin: 50px auto;
        }

        .fdset_bg>p {
            border-bottom: 1px solid #969696;
            padding: 10px 0;
        }


        .input_adrs2,
        .input_adrs3 {
            width: 300px;
            height: 30px;
            margin-bottom: 10px;
        }

        .input_pwd {
            margin-bottom: 10px;
        }

        .input_pwd,
        .input_birth,
        .input_tel,
        .input_email,
        .input_ps_code {
            width: 200px;
            height: 30px;
        }

        select {
            height: 36px;
        }

        .btn2 {
            width: 200px;
            height: 50px;
        }

        label {
            display: inline-block;
            width: 180px;
            height: 20px;
            line-height: 20px;
        }

        .only_width {
            display: inline-block;
            font-weight: bold;
            width: 180px;
            height: 20px;
            line-height: 20px;
        }

        label {
            font-weight: bold;
        }

        .err_txt {
            color: red;
            font-style: italic;
        }

        .red_dot {
            font-weight: bold;
            color: red;
        }

        .pwd_btn {
            display: block;
            margin-left: 190px;
            width: 150px;
            height: 30px;
        }

        .btn_pstn {
            display: block;
            width: 200px;
            margin: 0px auto 20px;
        }

        /*        .confirm_ck_pwd {
            color: green;
            font-style: italic;
        } */
    </style>
</head>

<body>

    <!-- MAIN -->
    <div class="wrap">
        <section class="top_txtBox">
            <div class="est_h2">
                <h2>회원정보 변경</h2>
            </div>
            <div class="est_txt">
                <p>필수정보 입력</p>
                <p><span class="red_dot">*</span> 표시는 필수입력 항목이니 반드시 입력해주세요.</p>
            </div>
        </section>

        <section class="body_txtBox">
            <form name="edit_form" action="edit.php" method="POST" onsubmit="return edit_formCheck()">
                <fieldset class="fdset_bg">
                    <legend>회원정보</legend>
                    <!-- get 방식 데이터 저장 -->
                    <input type="hidden" name="g_idx" value="<?php echo $array['idx']; ?>">
                    <p><span class="only_width">아이디<span class="red_dot">*</span></span><b><?php echo $array['u_id']; ?></b>
                    </p>
                    <p><span class="only_width">이름<span class="red_dot">*</span></span><b><?php echo $array['name']; ?></b>
                    </p>
                    <p><label for="user_pwd">현재 비밀번호<span class="red_dot">*</span></label>
                        <input class="input_pwd" id="user_pwd" name="u_pwd" type="password" placeholder="현재 비밀번호*"><br>

                        <label for="user_info_pwd">새 비밀번호</label>
                        <input class="input_pwd" id="user_info_pwd" name="u_chg_pwd" type="password" placeholder="새 비밀번호" onkeyup="pwdFormCheck(this.value)">
                        <br><span id="dsp_pwd"></span><br>
                        <label for="user_info_chkPwd">비밀번호 확인</label>
                        <input class="input_pwd" id="user_info_chkPwd" name="u_chk_pwd" type="password" placeholder="비밀번호 확인" onkeyup="pwd_check(this.value)">
                        <br><span id="dsp_ck_pwd"></span>
                        <br><button class="pwd_btn" type="submit" >비밀번호 변경</button>
                    </p>
                    <p><label for="user_born">성별<span class="red_dot">*</span></label>
                        <input class="" id="m" name="gender" type="radio" value="male" <?php if ($array['gender'] == "m" || $array['gender'] == "남") echo " checked" ?>>남
                        <input class="" id="f" name="gender" type="radio" value="female" <?php if ($array['gender'] == "f" || $array['gender'] == "여") echo " checked" ?>>여
                        <br><span id="user_born" class="err_txt"></span>
                    </p>
                    <!-- 생년월일을 DB에서 불러올 때 - 를뺀 숫자만 표기하기 위해 치환 -->
                    <!-- str_replace("어떤문자를", "어떤문자로" , "어떤값에서") -->
                    <?php $birth = str_replace("-", "", $array['birth']) ?>
                    <p><label for="user_born">생년월일<span class="red_dot">*</span></label>
                        <input class="input_birth" id="user_born" name="u_birth" type="text" value="<?php echo $birth; ?>">
                        ex)19890321 <br><span id="user_born" class="err_txt"></span>
                    </p>
                    <p><label for="user_tel">전화번호<span class="red_dot">*</span></label>
                        <input class="input_tel" id="user_tel" name="u_tel" type="text" value="<?php echo $array['mobile']; ?>">
                        <br><span id="err_tel" class="err_txt"></span>
                    </p>

                    <!-- string 분리 -->
                    <!-- explode("~~기준으로", "어떤문자열을", 몇개로?) -->
                    <?php $email = $array['email'];
                    $expEmail = explode("@", $email, 2) ?>
                    <p><label for="user_email1">이메일</label>
                        <input class="input_email" id="user_email1" name="u_email" type="text" value="<?php echo $expEmail[0]; ?>">@<input class="input_email" id="user_email2" name="u_email2" value="<?php echo $expEmail[1]; ?>" type="text">
                        <!-- onchange 셀렉트의 옵션을 바꿀 때 이벤트 -->
                        <select id="select_check" onchange="selectEmail()">
                            <option value="">직접입력</option>
                            <option value="naver.com">naver.com</option>
                            <option value="daum.net">daum.net</option>
                            <option value="gmail.com">gmail.com</option>
                        </select>
                        <br><span id="err_email" class="err_txt"></span>
                    </p>

                    <p><label for="ps_code">우편번호</label>
                        <input class="input_ps_code" id="ps_code" name="ps_code" type="text" value="<?php echo $array['pscode']; ?>">
                        <button type="button" onclick="searchAddres()">주소 검색</button>
                        <br><span id="err_adrs1" class="err_txt"></span>
                    </p>

                    <p><label for="user_adrs2">기본 주소</label>
                        <input class="input_adrs2" id="user_adrs2" name="u_addr2" type="text" value="<?php echo $array['addr_b']; ?>">
                        <br><span id="err_adrs2" class="err_txt"></span>
                        <label for="user_adrs3">상세 주소</label>
                        <input class="input_adrs3" id="user_adrs3" name="u_addr3" type="text" value="<?php echo $array['addr_b']; ?>">
                        <br><span id="err_adrs3" class="err_txt"></span><span class="only_width"></span> ※ 추가 배송지는 <a href="">[배송지]</a> 설정에서 추가 할 수 있습니다.

                    </p>
                    <p>
                        회원정보변경 안내<br>
                        쿠팡포인트 회원 주소 정보는 신세계포인트 사이트에서 변경하실 수 있습니다.<br>
                        배송지 정보는 '나의 정보관리 > 배송지 관리' 메뉴에서 추가/수정/삭제하실 수 있습니다.<br>
                        주문 정보는 회원 정보에 등록된 휴대폰번호 및 이메일주소로 안내됩니다.<br>
                    </p>
                    <p>
                        <span class="btn_pstn"><button class="btn2" type="submit">저장</button></span>
                    </p>
                    <!--                     <button class="btn2" type="button" onclick="history.back()">뒤로가기</button>
                    <button class="btn2" type="button" onclick="mem_del()">회원탈퇴</button>
                    <br><span id="err_btn2" class="err_txt"></span> -->
                </fieldset>
            </form>
        </section>

        <!--FOOTER -->
    </div>
</body>

</html>