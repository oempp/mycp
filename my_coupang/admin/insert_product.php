<?php
$p_code = $_POST['p_code'];
$p_ct_code = $_POST['p_ct_code'];
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_extra_price = $_POST['p_extra_price'];
$p_show = $_POST['p_show'];
$p_on_sale = $_POST['p_on_sale'];
$p_for_sale = $_POST['p_for_sale'];
$p_stock = $_POST['p_stock'];
$p_shp_info = $_POST['p_shp_info'];
$p_img_info = $_POST['p_img_info'];

echo "상품코드 : " . $p_code . "<br>";
echo "카테고리 코드 : " . $p_ct_code . "<br>";
echo "상품명 : " . $p_name . "<br>";
echo "판매가 : " . $p_price . "<br>";
echo "추가금액 : " . $p_extra_price . "<br>";
echo "진열여부 : " . $p_show . "<br>";
echo "판매여부 : " . $p_on_sale . "<br>";
echo "할인여부 : " . $p_for_sale . "<br>";
echo "재고여부 : " . $p_stock . "<br>";
echo "상품 배송 정보 : " . $p_shp_info . "<br>";
echo "상품 이미지 정보 : " . $p_img_info . "<br>";


if (!$p_code || !$p_ct_code || !$p_name || !$p_price || !$p_show || !$p_on_sale || !$p_for_sale || !$p_stock || !$p_shp_info || !$p_img_info) {
    echo "    
<script type=\"text/javascript\">
alert(\"상품정보를 정확히 입력하세요.\");
location.href=history.back();
</script>";
exit;
}
//DB 접속
include "../inc/dbcon.php";
//쿼리
$sql = "insert into product(p_code, p_ct_code, p_name, p_price, p_extra_price, p_show, p_on_sale, p_for_sale, p_stock, p_shp_info, p_img_info) values('$p_code', '$p_ct_code', '$p_name', '$p_price', '$p_extra_price', '$p_show', '$p_on_sale', '$p_for_sale', '$p_stock', '$p_shp_info', '$p_img_info');";
//$result = mysqli_query($dbcon, sql);

echo $sql;

//페이지 이동
echo "    
<script type=\"text/javascript\">
alert(\"상품 정보 등록 완료.\");
location.href=\"input_product.php\";
</script>";
