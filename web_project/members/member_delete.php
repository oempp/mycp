<?php
//데이터 가져오기
include "../inc/session.php";
//get 방식으로 데이터 가져오기
//location.href = "member_delete.php?g_idx=<?php echo $array['idx'];";
//전페이지에서 get 방식으로 idx 값을 저장후에 넘기기
$g_idx = $_GET['g_idx'];//넘긴값을 변수에 저장

//DB연결
include "../inc/dbcon.php";
//쿼리작성
//delete from 테이블명;
$sql = "delete from members where idx='$s_idx';";
//쿼리전송
mysqli_query($dbcon, $sql);

//세션 정보도 지워야 함
unset($_SESSION["s_idx"]);
unset($_SESSION["s_id"]);
unset($_SESSION["s_name"]);

echo "
<script type=\"text/javascript\">
alert(\"회원탈퇴가 완료 되었습니다.\");
location.href=\"../index.php\";
</script>
";    










?>