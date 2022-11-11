<?php
include "../inc/session.php";
if ($s_idx != 1) {
    echo "    
    <script type=\"text/javascript\">
    alert(\"관리자만 접근 할 수 있습니다.\");
    location.href=\"../login/login.php\";
    </script>";
    exit;
}
//DB 연결
include "inc/dbcon.php";

//쿼리 작성
$sql = "select * from members;";

//쿼리 전송
$result = mysqli_query($dbcon, $sql);

//DB 리턴
$array = mysqli_fetch_array($result);

//전체 데이터 가져오기
$total = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 페이지</title>
    <style type="text/css">
        table td {
            border-collapse: collapse;
        }

        .mem_list_title {
            border-top: 2px solid #999;
            border-bottom: 1px solid #999;
            text-align: center;
        }

        th {
            padding: 20px;
        }

        tr {
            border: 1px solid black;
        }

        .no {
            width: 40px;
        }

        .u_id {
            width: 100px;
        }

        .name {
            width: 100px;
        }

        .gender {
            width: 100px;
        }

        .birth {
            width: 100px;
        }

        .mobile {
            width: 100px;
        }

        .email {
            width: 100px;
        }

        .addr {
            width: 100px;
        }

        .date {
            width: 100px;
        }

        .modify {
            width: 60px;
        }
    </style>

</head>

<body>
    <h2>관리자</h2>
    <p><span><?php echo $s_name; ?>님 안녕하세요</span></p>
    <p>
        <a href="../index.php">홈으로</a>
        <a href="login/logout.php">로그아웃</a>
    </p>
    <?php include "../admin/inc/sub_header.html"; ?>
    <!-- 콘텐트 -->
    <b><p>전체 회원수 : <?php echo $total; ?>명</p></b>
    <table class="mem_list_set">
        <tr class="mem_list_title">
            <th class="no">번호</th>
            <th class="u_id">아이디</th>
            <th class="name">이름</th>
            <th class="gender">성별</th>
            <th class="birth">생년월일</th>
            <th class="mobile">전화번호</th>
            <th class="email">이메일</th>
            <th class="addr">주소</th>
            <th class="date">가입일</th>
            <th class="modify">관리</td>
        </tr>
        <tr class="mem_list_title">
            <td>번호</td>
            <td>아이디</td>
            <td>이름</td>
            <td>성별</td>
            <td>생년월일</td>
            <td>전화번호</td>
            <td>이메일</td>
            <td>주소</td>
            <td>가입일</td>
            <td>
                <a href="">[수정]</a>
                <a href="">[삭제]</a>
            </td>
        </tr>
    </table>
</body>

</html>