<?php
//상품 코드 등록
include "../inc/product_code.php"; // $product[NN]
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 정보 입력</title>
    <style type="text/css">

        fieldset {
            width: 800px;
            height: auto;
            margin: 100px auto;
        }
        label {
            display: inline-block;
            width: 150px;
            height: 30px;
        }
    </style>
</head>

<body>

    <form name="product_form" action="insert_product.php" method="POST">

        <fieldset>
            <legend>상품 정보</legend>
            <p> <label for="p_code">상품 코드</label>
                <input type="text" name="p_code" class="p_code" id="p_code" value=""> ex)P.N(8)
            </p>

            <p> <label for="p_ct_code">카테고리 코드</label>
                <input type="text" name="p_ct_code" class="p_ct_code" id="p_ct_code" value=""> ex)C.N(6) 2-2-2
                <select name="" id="">
                <option value="select_00" selected>전체</option>
                    <option value="01">여성패션</option>
                    <option value="02">남성패션</option>
                    <option value="03">남녀 공용 의류</option>
                    <option value="04">유아동패션</option>
                    <option value="05">뷰티</option>
                    <option value="06">출산/유아동</option>
                    <option value="07">식품</option>
                    <option value="08">주방용품</option>
                    <option value="09">생활용품</option>
                    <option value="10">홈인테리어</option>
                    <option value="11">가전디지털</option>
                    <option value="12">스포츠/레저</option>
                    <option value="13">자동차용품</option>
                    <option value="14">도서/음반/DVD</option>
                    <option value="15">완구/취미</option>
                    <option value="16">문구/오피스</option>
                    <option value="17">반려동물용품</option>
                    <option value="18">헬스/건강식품</option>
                    <option value="19">국내여행</option>
                    <option value="20">해외여행</option>
                    <option value="21">장마 준비</option>
                    <option value="22">한복</option>
                    <option value="23">로켓설치</option>
                    <option value="24">공간별 집꾸미기</option>
                    <option value="25">헬스케어 전문관</option>
                    <option value="26">쿠팡 Only</option>
                    <option value="27">싱글라이프</option>
                    <option value="28">악기전문관</option>
                    <option value="29">결혼준비</option>
                    <option value="30">아트/공예</option>
                    <option value="31">홈카페</option>
                    <option value="32">실버스토어</option>
                </select>
                <select name="" id="">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <select name="" id="">
                    <option value="">01</option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </p>


            <p> <label for="p_name">상품명</label>
                <input type="text" name="p_name" class="p_name" id="p_name" value=""> vc(50)
            </p>


            <p> <label for="p_price">판매가</label>
                <input type="text" name="p_price" class="p_price" id="p_price" value=""> vc(30)
            </p>


            <p> <label for="p_extra_price">추가금액</label>
                <input type="text" name="p_extra_price" class="p_extra_price" id="p_extra_price" value=""> vc(30) null
            </p>


            <p> <label for="p_show">진열여부</label>
                Y<input type="radio" name="p_show" class="p_show" id="p_show" value="Y"> / 
                N<input type="radio" name="p_show" class="p_show" id="" value="N">
            </p>


            <p> <label for="p_on_sale">판매여부</label>
                Y<input type="radio" name="p_on_sale" class="" id="p_on_sale" value="Y"> / 
                N<input type="radio" name="p_on_sale" class="" id="" value="N">
            </p>


            <p> <label for="p_for_sale">할인여부</label>
                Y<input type="radio" name="p_for_sale" class="p_for_sale" id="p_for_sale" value="Y"> / 
                N<input type="radio" name="p_for_sale" class="p_for_sale" id="" value="N">
            </p>


            <p> <label for="p_stock">재고여부</label>
                Y<input type="radio" name="p_stock" class="p_stock" id="p_stock" value="Y"> / 
                N<input type="radio" name="p_stock" class="p_stock" id="p_stock" value="N">
            </p>

            <p> <label for="p_shp_info">상품 배송 정보</label>
                <input type="text" name="p_shp_info" class="p_shp_info" id="p_shp_info" value=""> vc(30)
            </p>

            <p> <label for="p_img_info">상품 이미지 정보</label>
                <input type="text" name="p_img_info" class="p_img_info" id="p_img_info" value=""> vc(30)
            </p>
            <button type="submit">저장</button>
            <button type="buttom">나가기</button>
        </fieldset>
        
    <h3>총 등록 상품 : <?php echo $MAX_PRODUCT;?> EA</h3>
    </form>
</body>

</html>