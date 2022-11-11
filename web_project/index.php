<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>인덱스</title>

</head>

<body>
    <!-- 로그인 전 -->
    <?php if (!$s_idx) { ?>
        <p>
            <a href="login/login.php">로그인</a>
            <a href="members/join.php" target="_blank">회원가입</a>
        </p>
        <!-- 관리자 로그인 -->
    <?php } else if ($s_idx == 1) { ?>
        <p><span><?php echo $s_name; ?>님 안녕하세요</span><a href="login/logout.php">로그아웃</a>
            <a href="admin/admin.php">관리자 페이지로 이동</a>
            <?php include "admin/inc/sub_header.html"; ?>
        </p>
        <!-- 로그인 후 -->
    <?php } else { ?>
        <p>
            <span><?php echo $s_name; ?>님 안녕하세요<a href="login/logout.php">로그아웃</a>
                <a href="members/info.php" target="_blank">회원정보</a></span>

        </p>

    <?php } ?>
</body>

</html>