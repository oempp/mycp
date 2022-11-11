<?php 
if ($s_idx != 1) {
    echo "
    <script type=\"text/javascript\">
    alert(\"관리자만 접근 할 수 있습니다.\");
    location.href=\"../../login/login.php\";
    </script>";
    exit;
}
