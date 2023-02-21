<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 테이블 이름
$table_name = "product_qna";



// 이전 페이지에서 값 가져오기
$qna_name = $_POST["qna_name"];
$qna_cate = $_POST["qna_cate"];
$qna_pwd = $_POST["qna_pwd"];
$qna_title = $_POST["qna_title"];
$qna_content = $_POST["qna_content"];
// 작성일자
$qna_date = date("Y-m-d");

//$p_code = $_POST["p_code"];
/* 상품코드 꼭 전송 받을것 */
// p_code 
$p_code = isset($_GET["p_code"]) ? $_GET["p_code"] : "";

//임시 p_code
$p_code = "p.00000001";



// 값 확인

echo "<p> 상품코드 : " . $p_code . "</p>";
echo "<p> 이름 : " . $qna_name . "</p>";
echo "<p> 비밀번호 : " . $qna_pwd . "</p>";
echo "<p> 질문유형 : " . $qna_cate . "</p>";
echo "<p> 제목 : " . $qna_title . "</p>";
echo "<p> 내용 : " . $qna_content . "</p>";
echo "<p> 작성일 : " . $qna_date . "</p>";



// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "insert into $table_name(";
$sql .= "p_code, qna_name, qna_pwd, qna_cate, qna_title, qna_content, qna_date";
$sql .= ") values(";
$sql .= "'$p_code', '$qna_name', '$qna_pwd', '$qna_cate', '$qna_title', '$qna_content', '$qna_date'";
$sql .= ");";
echo $sql;
/* exit; */

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
    alert(\"등록 완료되었습니다.\");
    location.href = \"detail_p.00000001.php\";
    window.close();
    </script>
    ";
