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
                <input type="text" name="p_ct_code" class="p_ct_code" id="p_ct_code" value=""> ex)C.N(4)
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
    </form>
</body>

</html>