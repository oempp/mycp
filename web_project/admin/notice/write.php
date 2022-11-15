<?php 

//세션 load
include "../inc/session.php";

//admic check
include "../inc/admin_check.php";


?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
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

        /*        .confirm_ck_pwd {
            color: green;
            font-style: italic;
        } */
    </style>

    <!-- script -->
    <script type="text/javascript">
        function notice_check() {
            var n_title = document.getElementById("n_title");
            var n_content = document.getElementById("n_content");


            //숫자만 나열인지 검사 // 정규식 <-검색해서 사용
            var NUM_CHECK = /^[0-9]+$/g;

            const MAX_STRING_LENGTH = 12;
            const MIN_STRING_LENGTH = 4;
            const MAX_NUM_LENGTH = 12;
            const MIN_NUM_LENGTH = 4;

            /* 제목이 없을때 */
            if (!n_title.value) {
                var txt = document.getElementById("err_id");
                txt.textContent = "제목을 입력하세요.";
                //alert("아이디를 입력하세요")
                n_title.focus();
                return false;
            }


            /* 내용이 없을때 */
            if (!n_content.value) {
                var txt = document.getElementById("err_pwd");
                txt.textContent = "내용을 입력하세요";
                //alert("이름을 입력하세요");
                n_content.focus();
                return false;
            }


        }

        //아이디 중복확인 팝업창
        function chkId() {
            //필요 인자 3개
            //window.open("팝업될 문서 경로", "팝업 되었을 때의 이름(생략가능)", "옵션")
            window.open("../members/id_search.php", "width=300px height=300px");

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


    <form name="notice_form" action="insert.php" method="get" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset class="bg">
            <legend>공지사항</legend>
           
            <p>작성자 <?php echo $s_name; ?></p> 
            <input type="hidden" name="w_writer" value="1">
            <input type="hidden" name="w_date" value="1">
            <input type="hidden" name="cnt" value="0">

            <p><label for="n_title">제목</label>
                <input class="n_title" id="n_title" name="n_title" type="text">
                <br><span id="err_id" class="err_txt"></span>
            </p>
            <p><label for="n_content">내용</label>
                <textarea class="n_content" id="n_content" name="n_content" cols="60" row="10"></textarea>
                <br><span id="err_pwd" class="err_txt"></span>
            </p>
            <p><label for="n_content">파일첨부</label>
                <input type="file" id="up_file" name="up_file">
            </p>
            <label for=""></label>
            <button class="btn2" type="submit">등록하기</button>
            <button class="btn2" type="button" onclick="history.back()">뒤로가기</button>
            <br><span id="err_btn2" class="err_txt"></span>
        </fieldset>
    </form>
</body>

</html>