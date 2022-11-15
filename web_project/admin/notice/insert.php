<?php
//db 접속 하는 php 불러오기
include "../inc/dbcon.php";
include "../inc/session.php";

/* 이전 페이지에서 값 가져오기 */
//method 값 및 name 값 필요
//method : get 일 경우 $_GET["필드 네임 속성값"];
//method : post 일 경우 $_POST["필드 네임 속성값"];

//변수 선언 및 값 저장
$n_title = $_GET["n_title"];
$n_content = $_GET["n_content"];
$w_riter = $_GET["w_writer"];
$w_date = date("y-m-d");
$n_cnt = $_GET["cnt"];

//파일 업로드
if ($_FILES["up_file"]) {
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"];
    //$up = move_uploaded_file(임시파일이름, "저장할위치/저장할 이름");
    $up = move_uploaded_file($tmp_name, "../../data/$f_name");    
}


$tmp_name = $_FILES["up_file"]["tmp_name"];
$f_name = $_FILES["up_file"]["name"];
$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];
$a = "[ 완료 ]" . "<hr>";

// document.write() == echo
$up = move_uploaded_file($tmp_name, "../../data/$f_name");
/* 값 저장됐는지 확인 */
echo "<p>제목 : " . $n_title . "</p>";
echo "<p>내용 : " . $n_content . "</p>";
echo "<p>작성자 : " . $s_name . "</p>";
echo "<p>작성일 : " . $w_date . "</p>";
echo "<p>파일이름 : " . $f_name . "</p>";
echo "<p>파일타입 : " . $f_type . "</p>";
echo "<p>파일사이즈 : " . $f_size . "</p>";
echo $a;


/* $sql = "insert into members(";
 $sql = "u_id, name, pwd , gender, birth, mobile, email, pscode,addr_b, addr_d, reg_date)";
 $sql =  "values(";
 $sql = "'tws','admin','1111', '남', '19880530', '01088612375', 'thdxodns@naver.com', '11764', '경기도', '으장부시', '20221031');"; */

//$sql = "insert into members(u_id, name, pwd , gender, birth, mobile, email, pscode, addr_b, addr_d, reg_date) values('tws','admin','1111', '남', '19880530', '01088612375', 'thdxodns@naver.com', '11764', '경기도', '으장부시', '20221031');";
include "../inc/dbcon.php";
/* 쿼리문 형식으로 변형 */
$sql = "insert into notice(n_title, n_content, writer, w_date, f_name, f_type, f_data) values('$n_title','$n_content','$s_name', '$w_date','$f_name', '$f_type','$_data');";
echo $sql;


exit;
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
    location.href = "list.php";
</script>