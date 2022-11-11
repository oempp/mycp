<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 검색</title>
</head>
<style type="text/css">
    body, input, button {
        font-size: 20px;
    }
    
</style>

<script type="text/javascript">
var u_id = document.getElementById("user_id");
function aa () {
    u_id.value = "aaaaaa";
}

</script>
<body>
    <form id="id_search_form" action="id_search_result.php" method="POST" onsubmit="">
        <fieldset>
            <legend>아이디검색</legend>
            <p>
                <label for="user_id">입력</label>
                <input type="text" name="user_id" id="user_id" value="" onmouseover="aa()">
                <button type="submit">검색</button>
            </p>
        </fieldset>
    </form>
    
</body>
</html>