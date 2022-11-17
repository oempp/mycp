<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품평</title>
    <!-- init.css -->
    <link rel="stylesheet" type="text/css" href="../css/init.css">
    <style type="text/css">
        label {
            display: inline-block;
            font-size: 12px;
            width: 60px;
        }

        input {
            margin: 5px 0;
        }

        .qna_notice_box {
            width: 400px;
            height: auto;
            margin: auto;
            font-size: 8px;
            padding: 10px;
            border: 1px solid grey;
        }

        .qna_notice_box {
            width: 400px;
            border: 1px solid grey;
            height: auto;
            margin: 10px auto;
            padding: 20px;
        }

        textarea {
            background-color: #EEEEEE;
        }

        button {
            border-style: none;
            width: 150px;
            height: 40px;
            margin: 10px 2px;
        }

        .ok_btn {
            background-color: black;
            color: white;
        }

        .no_btn {
            background-color: grey;
            color: white;
        }

        .margin_auto {
            display: flex;
            justify-content: center;
            width: 430px;
            margin: auto;
        }
        .star {
            font-size: 16px;
            color:#FAB502;
            line-height: 30px;
        }
    </style>

    <script>
        function board_check() {
            var cmt_name = document.getElementById("cmt_name");
            var cmt_pwd = document.getElementById("cmt_pwd");
            var cmt_title = document.getElementById("cmt_title");
            var cmt_content = document.getElementById("cmt_content");

            if (!cmt_name.value) {
                alert("이름을 입력하세요.");
                cmt_name.focus();
                return false;
            };

            if (!cmt_pwd.value) {
                alert("비밀번호를 입력하세요.");
                cmt_pwd.focus();
                return false;
            };

            if (!cmt_title.value) {
                alert("제목을 입력하세요.");
                cmt_title.focus();
                return false;
            };

            if (!cmt_content.value) {
                alert("내용을 입력하세요.");
                cmt_content.focus();
                return false;
            };
        };
    </script>
</head>

<body>
    <section>
        <div class="qna_notice_box">
            <p>문의 내역 및 답변은 MY SSG > 상품 Q&A에서 조회 가능합니다.</p>
            <p>상품과 관련없는 내용, 비방, 광고 등 문의와 무관한 내용의 글은 사전 동의 없이 삭제될 수 있습니다.</p>
            <p>휴대폰번호 수정을 원하시면 MYSSG > 개인정보수정 메뉴에서 수정 후 신청해주시기 바랍니다.</p>
        </div>

        <div class="qna_notice_box">
            <form name="board_form" action="insert.php" method="post" onsubmit="return board_check()">
                <fieldset>
                    <legend>상품평</legend>
                    <p>
                        <label for="cmt_name">이름</label>
                        <input type="text" name="cmt_name" id="cmt_name">
                    </p>

                    <p>
                        <label for="cmt_pwd">비밀번호</label>
                        <input type="text" name="cmt_pwd" id="cmt_pwd">
                    </p>

                    <p>
                        <label for="cate">평점</label>
                        <span class="star">★★★★★ </span><input type="radio" class="cmt_score" id="cmt_score" name="cmt_score" value="5">
                        <span class="star">★★★★ </span><input type="radio" class="cmt_score" id="cmt_score" name="cmt_score" value="4">
                        <span class="star">★★★ </span><input type="radio" class="cmt_score" id="cmt_score" name="cmt_score" value="3">
                        <span class="star">★★ </span><input type="radio" class="cmt_score" id="cmt_score" name="cmt_score" value="2">
                        <span class="star">★ </span><input type="radio" class="cmt_score" id="cmt_score" name="cmt_score" value="1">
                    </p>

                    <p>
                        <label for="cmt_title">제목</label>
                        <input type="text" name="cmt_title" id="cmt_title">
                    </p>

                    <p>
                        <label for="cmt_content">내용</label>
                        <textarea cols="40" rows="20" name="cmt_content" id="cmt_content" placeholder="문의 내용을 입력하세요"></textarea>
                    </p>

                    <div class="margin_auto">
                        <button type="submit" class="ok_btn">확인</button>
                        <button type="button" class="no_btn" onclick="history.back()">취소</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>

</body>

</html>