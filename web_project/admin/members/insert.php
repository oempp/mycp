<?php 
//db 접속 하는 php 불러오기
include "../inc/dbcon.php";


/* 이전 페이지에서 값 가져오기 */
//method 값 및 name 값 필요
//method : get 일 경우 $_GET["필드 네임 속성값"];
//method : post 일 경우 $_POST["필드 네임 속성값"];

//변수 선언 및 값 저장
$u_id = $_GET["u_id"];
$u_pwd = $_GET["u_pwd"];
$u_chk_pwd = $_GET["u_chk_pwd"];
$u_name = $_GET["u_name"];
$u_gender = $_GET["gender"];
$u_tel = $_GET["u_tel"];
$u_email = $_GET["u_email"]."@".$_GET["u_email2"];
$u_birth = $_GET["u_birth"];
$ps_code = $_GET["ps_code"];
$u_addr2 = $_GET["u_addr2"];
$u_addr3 = $_GET["u_addr3"];
$a = "[ 완료 ]"."<hr>";
$reg_date = date("y-m-d");
// document.write() == echo

/* 값 저장됐는지 확인 */
echo "<p>아이디 : ".$u_id."</p>";
echo "<p>비밀번호 : ".$u_pwd."</p>";
echo "<p>비번확인 : ".$u_chk_pwd."</p>";
echo "<p>이름 : ".$u_name."</p>";
echo "<p>성별 : ".$u_gender."</p>";
echo "<p>생년월일 : ".$u_birth."</p>";
echo "<p>전화번호 : ".$u_tel."</p>";
echo "<p>이메일 : ".$u_email."</p>";
echo "<p>우편번호 : ".$ps_code."</p>";
echo "<p>주소 : ".$u_addr2."</p>";
echo "<p>주소 : ".$u_addr3."</p>";
echo "<p>가입일 : ".$reg_date."</p>";
echo $a;


 /* $sql = "insert into members(";
 $sql = "u_id, name, pwd , gender, birth, mobile, email, pscode,addr_b, addr_d, reg_date)";
 $sql =  "values(";
 $sql = "'tws','admin','1111', '남', '19880530', '01088612375', 'thdxodns@naver.com', '11764', '경기도', '으장부시', '20221031');"; */

 //$sql = "insert into members(u_id, name, pwd , gender, birth, mobile, email, pscode, addr_b, addr_d, reg_date) values('tws','admin','1111', '남', '19880530', '01088612375', 'thdxodns@naver.com', '11764', '경기도', '으장부시', '20221031');";

 /* 쿼리문 형식으로 변형 */
 $sql = "insert into members(u_id, name, pwd , gender, birth, mobile, email, pscode, addr_b, addr_d, reg_date) values('$u_id','$u_name','$u_pwd', '$u_gender', '$u_birth', '$u_tel', '$u_email', '$ps_code', '$u_addr2', '$u_addr3', '$reg_date');";
 echo $sql;

/* 만들어진 쿼리를 DB에 보내기 */
//mysqli_query("DB 연결 객체", "전송할 쿼리"); // 문법
mysqli_query($dbcon, $sql); // 문법

//종료
//mysqli_close("연결 객체");
mysqli_close($dbcon);
/* 리디렉션 php에서 */

/* echo
"<script type="text/javascript">
//location.href = "이동할 페이지 주소";
location.href = "welcome.php";
</script>";

 */

?>
<!-- 리디렉션 -->
<script type="text/javascript">
/* 지금 페이지를 다른 페이지로 바꿈 (이동 X )*/
//location.replace();

/* a 태그랑 같음 */
//location.href = "이동할 페이지 주소";
location.href = "welcome.php";

</script>