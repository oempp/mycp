<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <!-- CSS -->
    <style type="text/css">
        .bg {
            width: 800px;
            height: auto;
            background-color: rgb(255, 243, 213);
            margin: 50px auto;
        }

        .btn2 {
            width: 200px;
            height: 50px;
            margin: auto;
        }

        label {
            display: inline-block;
            width: 130px;
            height: 20px;
            line-height: 20px;
        }

        .err_txt {
            color: red;
            font-style: italic;
        }

        .redTxt {
            color: red;
            font-weight: bold;

        }

        .blueTxt {
            color: blue;
            font-weight: bold;
        }

        /*        .confirm_ck_pwd {
            color: green;
            font-style: italic;
        } */
    </style>

    <!-- script -->
    <script type="text/javascript">
        function formCheck() {
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

            /* 아이디 */
            //아이디값이 없을때
            if (!user_id.value) {
                var txt = document.getElementById("err_id");
                txt.textContent = "아이디를 입력하세요";
                //alert("아이디를 입력하세요")
                user_id.focus();
                return false;
            }


            /* 비밀번호 */
            //비밀번호 값이 없을때
            if (!user_pwd.value) {
                var txt = document.getElementById("err_pwd");
                txt.textContent = "비밀번호를 입력하세요";
                //alert("이름을 입력하세요");
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






            //전화번호  //정규식 검색
            /*             if (!NUM_CHECK.test(user_tel.value)) {
                            var txt = document.getElementById("err_tel");
                            txt.textContent = "숫자만 입력하세요";
                            user_tel.focus();
                            return false;
                        } */
            /*             if (!user_tel.value){
                            var txt = document.getElementById("err_tel");
                            txt.textContent = "숫자만 입력하세요";
                            user_tel.focus();
                            console.log(user_tel.value);
                            return false;
            
                        } */

            //약관동의
            if (!apply.checked) {
                var txt = document.getElementById("err_apply");
                txt.textContent = "약관 동의가 필요합니다";
                apply.focus();
                return false;
            }

        }

        //아이디 중복확인 팝업창
        function key_up_chkId(txt) {
            //필요 인자 3개
            //window.open("팝업될 문서 경로", "팝업 되었을 때의 이름(생략가능)", "옵션")
            //window.open("../members/id_search.php", "width=300px height=300px");
            var dsp = document.getElementById("dsp");
            dsp.innerHTML = txt;
        }

        ///비동기식 아이디 체크 ajax
        function getCont(g_id) {
            var dsp = document.getElementById('dsp');

            if (g_id.length < 4 || g_id.length > 12) {
                dsp.innerHTML = '아이디는 4~12글자만 입력할 수 있습니다..';
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
                            txt = txt.replace(/\n/g, "");
                            if (txt == 'Y') {
                                dsp.innerHTML = '이미 가입된 아이디입니다.';
                                dsp.className = 'redTxt';
                            } else {
                                dsp.innerHTML = '사용할 수 있는 아이디입니다.';
                                dsp.className = 'blueTxt';
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
    </script>
</head>

<body>


    <form name="" action="/web_project/members/insert.php" method="get" onsubmit="return formCheck()">
        <fieldset class="bg">
            <legend>회원가입</legend>


            <p><label for="user_id">아이디</label>
                <input class="" id="user_id" name="u_id" type="text" onkeyup="getCont(this.value)">
                <br><span id="dsp"></span>
                <br><span id="err_id" class="err_txt"></span>
            </p>
            <p><label for="user_pwd">비밀번호</label>
                <input class="" id="user_pwd" name="u_pwd" type="password">
                <br><span id="err_pwd" class="err_txt"></span>
            </p>
            <p><label for="user_ck_pwd">비빌번호 확인</label>
                <input class="" id="user_ck_pwd" name="u_chk_pwd" type="password">
                <br><span id="err_ck_pwd" class="err_txt"></span>
            </p>
            <p><label for="user_name">이름</label>
                <input class="" id="user_name" name="u_name" type="text">
                <br><span id="err_name" class="err_txt"></span>
            </p>
            <p><label for="user_born">성별</label>
                <input class="" id="m" name="gender" type="radio" value="male">남
                <input class="" id="f" name="gender" type="radio" value="female">여
                <br>ex)19890321 <br><span id="user_born" class="err_txt"></span>
            </p>
            <p><label for="user_born">생년월일</label>
                <input class="" id="user_born" name="u_birth" type="text">
                <br>ex)19890321 <br><span id="user_born" class="err_txt"></span>
            </p>
            <p><label for="user_tel">전화번호</label>
                <input class="" id="user_tel" name="u_tel" type="text">
                <br><span id="err_tel" class="err_txt"></span>
            </p>
            <p><label for="user_email1">이메일</label>
                <input class="" id="user_email1" name="u_email" type="text">@<input class="" id="user_email2" name="u_email2" value="" type="text">
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
                <input class="" id="ps_code" name="ps_code" type="text">
                <button type="button" onclick="searchAddres()">주소 검색</button>
                <br><span id="err_adrs1" class="err_txt"></span>
            </p>
            <p><label for="user_adrs2">기본 주소</label>
                <input class="" id="user_adrs2" name="u_addr2" type="text">
                <br><span id="err_adrs2" class="err_txt"></span>
                <label for="user_adrs3">상세 주소</label>
                <input class="" id="user_adrs3" name="u_addr3" type="text">
                <br><span id="err_adrs3" class="err_txt"></span>
            </p>
            <p>
                <input class="" id="apply" name="" type="checkbox" value="y">
                <label for="apply">약관동의</label>
                <span id="err_apply" class="err_txt"></span>
            </p>
            <button class="btn2" type="submit">회원가입</button>
            <button class="btn2" type="button" onclick="history.back()">뒤로가기</button>
            <br><span id="err_btn2" class="err_txt"></span>
        </fieldset>
    </form>

    <form action="../insert.php" method="post">
        <input type="text" name="userId" placeholder="아이디" required>
        <input type="password" name="userPass" placeholder="비밀번호" required>
        <input type="text" name="userName" placeholder="이름" required>
        <input type="text" name="context" placeholder="내용" required>
        <button type="submit">버튼</button>
    </form>







</body>

</html>