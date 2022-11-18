<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 테이블 이름
$table_name = "product_cmt";



// 이전 페이지에서 값 가져오기
$cmt_name = $_POST["cmt_name"];
$cmt_pwd = $_POST["cmt_pwd"];
$cmt_score = isset($_POST["cmt_score"]) ? $_POST["cmt_score"] : 1;

//$p_code = $_POST["p_code"];
/* 상품코드 꼭 전송 받을것 */
// p_code 
$p_code = isset($_GET["p_code"]) ? $_GET["p_code"] : "";

//임시 p_code
$p_code = "p.00000001";

$cmt_title = $_POST["cmt_title"];
$cmt_content = $_POST["cmt_content"];

// 작성일자
$cmt_date = date("Y-m-d");

// 값 확인

echo "<p> 이름 : ".$cmt_name."</p>";
echo "<p> 비밀번호 : ".$cmt_pwd."</p>";
echo "<p> 제목 : ".$cmt_title."</p>";
echo "<p> 내용 : ".$cmt_content."</p>";
echo "<p> 평점 : ".$cmt_score."</p>";
echo "<p> 가입일 : ".$cmt_date."</p>";



// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "insert into $table_name(";
$sql .= "p_code, cmt_name, cmt_pwd, cmt_title, cmt_content, cmt_date, cmt_score";
$sql .= ") values(";
$sql .= "'$p_code', '$cmt_name', '$cmt_pwd',  '$cmt_title', '$cmt_content', '$cmt_date', '$cmt_score'";
$sql .= ");";
echo $sql;
exit;

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"detail_product.php\";
    </script>
    ";
