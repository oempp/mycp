<?php
//value 데이터 가져오기
$u_id = $_POST['user_id'];
echo $u_id;

//DB 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "select u_id from members where u_id='$u_id';";
//쿼리 전송
$result = mysqli_query($dbcon, $sql);
//DB에서 데이터 가져오기
$array = mysqli_fetch_array($result); //배열
$num = mysqli_num_rows($result); //데이터의 수 / 값이 있으면 중복 없으면 사용가능
//조건문 작성

if ($num) { // 값이 있으면 중복

} else {  //값이 없으면 사용가능

}
//DB  종료






?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색 결과</title>
    <style type="text/css">
        body {
            font-size: 20px;
        }

        .id_txt {
            font-weight: bold;
            color: blue;
        }

        .redTxt {
            color: red;
            font-weight: bold;

        }

        .blueTxt {
            color: blue;
            font-weight: bold;
        }
    </style>

    <script type="text/javascript">
        function returnId() {
            opener.document.getElementById("user_id").value = "<?php echo $u_id ?>";
            window.close();
        }
    </script>
</head>

<body>
    <?php if ($num) { ?>
        <p>
            입력하신 <span class="id_txt"><?php echo $u_id; ?></span>은 사용할 수 <span class="redTxt">없는</span> 아이디 입니다.
        </p>
        <p>
            <br><a id="use_id" href="#" onclick="returnId()">[닫기]</a>
            <br><a href="id_search.php">[다시검색]</a>
        </p>
    <?php } else { ?>
        <p>
            입력하신 <span class="id_txt"><?php echo $u_id; ?></span>은 사용할 수 <span class="blueTxt">있는</span> 아이디 입니다.
        </p>
        <p>
            <br><a id="use_id" href="#" onclick="returnId()">[사용하기]</a>
            <br><a href="id_search.php">[다시검색]</a>
        </p>
    <?php } ?>


</body>

</html>