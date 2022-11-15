<?php
//데이터 가져오기
//변수 선언 및 값 저장
$u_pwd = $_POST["u_pwd"];
$u_chg_pwd = $_POST["u_chg_pwd"];
$u_chk_pwd = $_POST["u_chk_pwd"];
$u_gender = $_POST["gender"];
$u_tel = $_POST["u_tel"];
$u_email = $_POST["u_email"] . "@" . $_POST["u_email2"];
$u_birth = $_POST["u_birth"];
$ps_code = $_POST["ps_code"];
$u_addr2 = $_POST["u_addr2"];
$u_addr3 = $_POST["u_addr3"];
$reg_date = date("y-m-d");

$only_pwd = $_GET["only_pwd"];

/* 값 저장됐는지 확인 */

echo "<p>비밀번호 : " . $u_pwd . "</p>";
echo "<p>새 비밀번호 : " . $u_chg_pwd . "</p>";
echo "<p>비밀번호 확인: " . $u_chk_pwd . "</p>";
echo "<p>성별 : " . $u_gender . "</p>";
echo "<p>생년월일 : " . $u_birth . "</p>";
echo "<p>전화번호 : " . $u_tel . "</p>";
echo "<p>이메일 : " . $u_email . "</p>";
echo "<p>우편번호 : " . $ps_code . "</p>";
echo "<p>주소 : " . $u_addr2 . "</p>";
echo "<p>주소 : " . $u_addr3 . "</p>";
echo "<p>최근 정보 수정일 : " . $reg_date . "</p>";
echo "only_pwd : " . $only_pwd . "</p>";

exit;


//DB접속
include "../inc/dbcon.php";

include "../inc/session.php"; //로그인한 사람 idx 불러오기
//쿼리 작성
$sql_ = "select * from members where idx='$s_idx';";
//쿼리 전송
$result = mysqli_query($dbcon, $sql_);
//DB에서 데이터 가져오기
$array = mysqli_fetch_array($result); //배열


//비밀번호 맞는지 체크함
if ($u_pwd) {
    if ($u_pwd != $array['pwd']) {
        echo "
        <script type=\"text/javascript\">
        alert(\"현재 비밀번호가 일치하지 않습니다.\");
        location.href = \"info.php\";
        </script>";
        exit;
    }

    //비밀번호만 변경 시 
    else if ($u_pwd == $array['pwd'] && $u_chg_pwd == $u_chk_pwd) {
        $sqlpwd = "update members set pwd='$u_chg_pwd' where idx='$s_idx';";
        $result = mysqli_query($dbcon, $sqlpwd);
        echo "
        <script type=\"text/javascript\">
        alert(\"비밀번호가 변경되었습니다.\");
        location.href = \"info.php\";
        </script>";
        exit;
    }
}

//비밀번호 값 없이 정보 수정할때
else if (!$u_pwd) {
    //비밀번호 X
    $sql_noPwd = "update members set gender='$u_gender', mobile='$u_tel', email='$u_email', birth='$u_birth', pscode='$ps_code', addr_b='$u_addr2', addr_d='$u_addr3' where idx='$s_idx';";
    $result = mysqli_query($dbcon, $sql_noPwd);
    echo "
    <script type=\"text/javascript\">
    alert(\"정보가 변경되었습니다.\");
    location.href = \"info.php\";
    </script>";
    exit;
}

//비밀번호 입력시
$sql = "update members set pwd='$u_chg_pwd', gender='$u_gender', mobile='$u_tel', email='$u_email', birth='$u_birth', pscode='$ps_code', addr_b='$u_addr2', addr_d='$u_addr3' where idx='$s_idx';";


//쿼리전송
if ($u_pwd) mysqli_query($dbcon, $sql); //비밀번호 있다면
else; //비밀번호 없다면

echo "
<script type=\"text/javascript\">
alert(\"수정 완료.\");
location.href = \"info.php\";
</script>";
