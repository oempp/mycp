

<?php
//세션 시작
session_start(); // 모든페이지에서 사용하는 공통변수 로그인 완료 시

//로그인 정보 변수에 저장
$u_id = $_POST["u_id"];
$pwd = $_POST["u_pwd"];

echo $u_id." / ".$pwd."<hr>";

//DB에 연결
include "../inc/dbcon.php";

//쿼리 작성
//$sql = "select * from members where u_id='tws';";
$sql = "select idx, u_id, pwd, name from members where u_id='$u_id';";
$sql2 = "select * from members where u_id='$u_id';";
echo $sql."<hr>";

//쿼리 전송
$result = mysqli_query($dbcon, $sql);
$result2 = mysqli_query($dbcon, $sql2);

//DB의 결과 값 가져오기

//mysqli_fetch_row("전송한 쿼리 = mysqli_query($dbcon, $sql)"); 
// row 열 - 컬럼순서대로 data 가져옴
$row = mysqli_fetch_row($result); // 작성 쿼리 기준으로 필드값을 가져옴
echo "row : ".$row[1]. "<hr>"; // 테이블 열에서 컬럼 0번째 값만 가져옴

//mysqli_fetch_array("전송한 쿼리 = mysqli_query($dbcon, $sql)"); 
//array 이름[필드명] 으로 data 가져옴
$array = mysqli_fetch_array($result2); // 열 전체 가져옴
//echo "array : ".$array['name']."<hr>"; // [필드명]

$num = mysqli_num_rows($result); // 전체 데이터 수 mysql 의 count(*) 과 같은 개념
echo $num;

//조건 처리
//세개의 값중에 사용하여 사용자가 입력한 ID 값이 있는지 체크
if (!$num) { //아이디가 없다면
    echo "
    <script type=\"text/javascript\">
    alert(\"일치하는 아이디가 없습니다.\");
    location.href=\"login.php\";
    </script>";    
} 

else { //아이디가 있다면
        // 비밀번호 체크
        if ($pwd == $array['pwd']) {  //비빌번호 일치
            echo "일치"; 
            //로그인이 완료되면 로그인된 정보가 모든페이지에서 공유해야함 (세션)
            //세션 변수 생성       $_SESSION["세션변수명"] = 저장할 값;
            $_SESSION["s_idx"] = $array['idx'];
            $_SESSION["s_id"] = $array['u_id'];
            $_SESSION["s_name"] = $array['name'];
        
        }
        else { //비밀번호 불 일치
            echo "    
            <script type=\"text/javascript\">
            alert(\"비밀번호가 일치하지 않습니다.\");
            location.href=\"login.php\";
            </script>";
        }
}

//조건 처리 완료 = 로그인 완료

//DB 종료
mysqli_close($dbcon);

//페이지 이동
echo "    
<script type=\"text/javascript\">
location.href=\"../index.php\";
</script>";
?>