<?php
//데이터 가져오기
//변수 선언 및 값 저장
$u_pwd = $_POST["u_pwd"];
$u_gender = $_POST["gender"];
$u_tel = $_POST["u_tel"];
$u_email = $_POST["u_email"]."@".$_POST["u_email2"];
$u_birth = $_POST["u_birth"];
$ps_code = $_POST["ps_code"];
$u_addr2 = $_POST["u_addr2"];
$u_addr3 = $_POST["u_addr3"];
$reg_date = date("y-m-d");

/* 값 저장됐는지 확인 */
isset($u_pwd)? $u_pwd:"";
echo "<p>비밀번호 : ".$u_pwd."</p>";
echo "<p>성별 : ".$u_gender."</p>";
echo "<p>생년월일 : ".$u_birth."</p>";
echo "<p>전화번호 : ".$u_tel."</p>";
echo "<p>이메일 : ".$u_email."</p>";
echo "<p>우편번호 : ".$ps_code."</p>";
echo "<p>주소 : ".$u_addr2."</p>";
echo "<p>주소 : ".$u_addr3."</p>";
echo "<p>최근 정보 수정일 : ".$reg_date."</p>";
exit;
//DB접속
include "../inc/dbcon.php";
//쿼리작성
include "../inc/session.php"; //로그인한 사람 idx 불러오기
//비밀번호 입력시
$sql = "update members set pwd='$u_pwd', gender='$u_gender', mobile='$u_tel', email='$u_email', birth='$u_birth', pscode='$ps_code', addr_b='$u_addr2', addr_d='$u_addr3' where idx='$s_idx';";
//비밀번호 X
$sql_noPwd = "update members set gender='$u_gender', mobile='$u_tel', email='$u_email', birth='$u_birth', pscode='$ps_code', addr_b='$u_addr2', addr_d='$u_addr3' where idx='$s_idx';";

//쿼리전송
if ($u_pwd) mysqli_query($dbcon, $sql); //비밀번호 있다면
else mysqli_query($dbcon, $sql_noPwd); //비밀번호 없다면

echo "
<script type=\"text/javascript\">
alert(\"수정 완료.\");
location.href = \"info.php\";
</script>";




?>