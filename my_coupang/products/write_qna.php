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
    </style>

    <script>
        function board_check() {
            var qna_name = document.getElementById("qna_name");
            var qna_pwd = document.getElementById("qna_pwd");
            var qna_title = document.getElementById("qna_title");
            var qna_content = document.getElementById("qna_content");

            if (!qna_name.value) {
                alert("이름을 입력하세요.");
                qna_name.focus();
                return false;
            };

            if (!qna_pwd.value) {
                alert("비밀번호를 입력하세요.");
                qna_pwd.focus();
                return false;
            };

            if (!qna_title.value) {
                alert("제목을 입력하세요.");
                qna_title.focus();
                return false;
            };

            if (!qna_content.value) {
                alert("내용을 입력하세요.");
                qna_content.focus();
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
            <form name="board_form" action="insert_qna.php" method="post" onsubmit="return board_check()">
                <fieldset>
                    <legend>상품평</legend>
                    <p>
                        <label for="qna_name">이름</label>
                        <input type="text" name="qna_name" id="qna_name">
                    </p>

                    <p>
                        <label for="qna_pwd">비밀번호</label>
                        <input type="password" name="qna_pwd" id="qna_pwd">
                    </p>

                    <p>
                        <label for="cate">유형</label>
<!--                         <select name="cate" id="cate" class="cate">
                            <option value="normal">일반</option>
                            <option value="music">음악</option>
                            <option value="movie">영화</option>
                        </select> -->
                        일반 <input type="radio" class="qna_cate" id="qna_cate" name="qna_cate" value="q_basic">
                        상품문의 <input type="radio" class="qna_cate" id="qna_cate" name="qna_cate" value="q_product">
                        배송문의 <input type="radio" class="qna_cate" id="qna_cate" name="qna_cate" value="q_shipping">
                        교환/반품문의 <input type="radio" class="qna_cate" id="qna_cate" name="qna_cate" value="q_exchange">
                        기타문의 <input type="radio" class="qna_cate" id="qna_cate" name="qna_cate" value="q_etc">
                    </p>

                    <p>
                        <label for="qna_title">제목</label>
                        <input type="text" name="qna_title" id="qna_title">
                    </p>

                    <p>
                        <label for="qna_content">내용</label>
                        <textarea cols="40" rows="20" name="qna_content" id="qna_content" placeholder="문의 내용을 입력하세요"></textarea>
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