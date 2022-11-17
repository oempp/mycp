<?php 
include "../inc/session.php"; 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <style>
        body,input,button,textarea, select, option{font-size:20px}
        input[type=checkbox]{width:20px;height:20px}
        a{text-decoration:none;margin:0 5px}
        fieldset{border:0 none}
        legend{display:none}
        .cate{width:200px}
    </style>
    <script>
        function board_check(){
            var cmt_name = document.getElementById("cmt_name");
            var cmt_pwd = document.getElementById("cmt_pwd");
            var cmt_title = document.getElementById("cmt_title");
            var cmt_content = document.getElementById("cmt_content");

            if(!cmt_name.value){
                alert("이름을 입력하세요.");
                cmt_name.focus();
                return false;
            };

            if(!cmt_pwd.value){
                alert("비밀번호를 입력하세요.");
                cmt_pwd.focus();
                return false;
            };

            if(!cmt_title.value){
                alert("제목을 입력하세요.");
                cmt_title.focus();
                return false;
            };

            if(!cmt_content.value){
                alert("내용을 입력하세요.");
                cmt_content.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <form name="board_form" action="insert.php" method="post" onsubmit="return board_check()">
        <fieldset>
            <legend>게시판</legend>
            <p>
                <label for="cmt_name">이름</label>
                <input type="text" name="cmt_name" id="cmt_name">
            </p>
            
            <p>
                <label for="cmt_pwd">비밀번호</label>
                <input type="text" name="cmt_pwd" id="cmt_pwd">
            </p>

            <p>
                <label for="cate">카테고리</label>
                <select name="cate" id="cate" class="cate">
                    <option value="normal">일반</option>
                    <option value="music">음악</option>
                    <option value="movie">영화</option>
                </select>
            </p>

            <p>
                <label for="cmt_title">제목</label>
                <input type="text" name="cmt_title" id="cmt_title">
            </p>

            <p>
                <label for="cmt_content">내용</label>
                <textarea cols="60" rows="10" name="cmt_content" id="cmt_content"></textarea>
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>