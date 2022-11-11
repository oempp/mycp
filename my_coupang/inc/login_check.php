<?php
//로그인 한 사용자 인지 확인
if (!$s_idx) {
    echo "    
    <script type=\"text/javascript\">
    alert(\"로그인 한 사용자만 접근 할 수 있습니다.\");
    location.href=\"../index.php\";
    </script>";
    exit;

} else {

}

?>