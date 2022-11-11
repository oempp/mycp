<?php
session_start();

//세션 삭제
//unset(세션 변수);
unset($_SESSION["s_idx"]);  //로그인 페이지 에서 만들었던 변수들 삭제
unset($_SESSION["s_id"] );
unset($_SESSION["s_name"]);

//페이지 이동
echo "    
<script type=\"text/javascript\">
location.href=\"../index.php\";
</script>";

?>