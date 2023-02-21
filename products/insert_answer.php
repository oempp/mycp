<?php
//세션
include "../inc/session.php";
// DB 연결
include "../inc/dbcon.php";

//값받기
$q_idx = $_GET['q_idx'];
$answer_cont = $_POST['answer_content'];
$answer_date = date("Y-m-d");
// 테이블 이름
$qna_table_name = "product_qna";
//쿼리 작성
$sql = "update $qna_table_name set qna_answer='$answer_cont', qna_answer_check='$answer_date'  where idx=$q_idx;";
//쿼리전송
mysqli_query($dbcon, $sql);
/* echo $q_idx;
echo $answer_cont;
echo $sql; */

//페이지 이동
echo "    
<script type=\"text/javascript\">
alert(\"답변이 완료되었습니다\");
location.href = \"detail_p.00000001.php\";
window.close();
</script>";
?>





?>