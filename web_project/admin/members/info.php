<?php
//세션값 가져오기
include "../inc/session.php";

//데이터 가져오기 (선택한 회원 데이터)
$g_idx = $_GET['g_idx'];
//로그인 한 사용자인지 체크 아니면 리턴 false
include "../inc/login_check.php";
//DB에 연결
include "../inc/dbcon.php";
//쿼리 작성
$sql = "select * from members where idx='$g_idx';";
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

        .only_width {
            display: inline-block;
            width: 130px;
            height: 20px;
            line-height: 20px;
        }

        .err_txt {
            color: red;
            font-style: italic;
        }

        /*        .confirm_ck_pwd {
            color: green;
            font-style: italic;
        } */
    </style>

    <!-- script -->
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
            var rtn_val = confirm("회원을 삭제 하시겠습니까?")
            if (rtn_val){
                location.href = "member_delete.php?g_idx=<?php echo $array['idx']; ?>";
            } else {
                
            }
        }
    </script>
</head>

<body>
    <?php include "../inc/sub_header.html"?>
    <?php echo "아아 : ".$g_idx ?>
    <form name="edit_form" action="edit.php" method="POST" onsubmit="return edit_formCheck()">
        <fieldset class="bg">
            <legend>회원정보</legend>
            <!-- get 방식 데이터 저장 -->
            <input type="hidden" name="g_idx" value="<?php echo $array['idx']; ?>">
            <p><span class="only_width">아이디 :</span><?php echo $array['u_id']; ?>
            </p>
            <p><span class="only_width">이름 :</span><?php echo $array['name']; ?>
            </p>
            <p><label for="user_pwd">비밀번호</label>
                <input class="" id="user_pwd" name="u_pwd" type="password">
                <br><span id="err_pwd" class="err_txt"></span>
            </p>


            <p><label for="user_born">성별</label>
                <input class="" id="m" name="gender" type="radio" value="male" <?php if ($array['gender'] == "m" || $array['gender'] == "남") echo " checked" ?>>남
                <input class="" id="f" name="gender" type="radio" value="female" <?php if ($array['gender'] == "f" || $array['gender'] == "여") echo " checked" ?>>여
                <br><span id="user_born" class="err_txt"></span>
            </p>

            <!-- 생년월일을 DB에서 불러올 때 - 를뺀 숫자만 표기하기 위해 치환 -->
            <!-- str_replace("어떤문자를", "어떤문자로" , "어떤값에서") -->
            <?php $birth = str_replace("-", "", $array['birth']) ?>
            <p><label for="user_born">생년월일</label>
                <input class="" id="user_born" name="u_birth" type="text" value="<?php echo $birth; ?>">
                <br>ex)19890321 <br><span id="user_born" class="err_txt"></span>
            </p>
            <p><label for="user_tel">전화번호</label>
                <input class="" id="user_tel" name="u_tel" type="text" value="<?php echo $array['mobile']; ?>">
                <br><span id="err_tel" class="err_txt"></span>
            </p>
            <!-- string 분리 -->
            <!-- explode("~~기준으로", "어떤문자열을", 몇개로?) -->
            <?php $email = $array['email'];
            $expEmail = explode("@", $email, 2) ?>
            <p><label for="user_email1">이메일</label>
                <input class="" id="user_email1" name="u_email" type="text" value="<?php echo $expEmail[0]; ?>">@<input class="" id="user_email2" name="u_email2" value="<?php echo $expEmail[1]; ?>" type="text">
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
                <input class="" id="ps_code" name="ps_code" type="text" value="<?php echo $array['pscode']; ?>">
                <button type="button" onclick="searchAddres()">주소 검색</button>
                <br><span id="err_adrs1" class="err_txt"></span>
            </p>
            <p><label for="user_adrs2">기본 주소</label>
                <input class="" id="user_adrs2" name="u_addr2" type="text" value="<?php echo $array['addr_b']; ?>">
                <br><span id="err_adrs2" class="err_txt"></span>
                <label for="user_adrs3">상세 주소</label>
                <input class="" id="user_adrs3" name="u_addr3" type="text" value="<?php echo $array['addr_b']; ?>">
                <br><span id="err_adrs3" class="err_txt"></span>
            </p>

            <p> <button class="btn2" type="submit">정보수정</button>
                <button class="btn2" type="button" onclick="history.back()">뒤로가기</button>
            </p>
            <button class="btn2" type="button" onclick="mem_del()">회원탈퇴</button>
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