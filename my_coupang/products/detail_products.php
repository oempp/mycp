<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 상세페이지</title>
    <!-- CSS -->
    <!-- init.css -->
    <link rel="stylesheet" type="text/css" href="../css/init.css">
    <!-- signup css -->
    <!-- 순서 고정 중복 css 효과있음 main 어딘가에 -->
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <!-- header.css -->
    <link rel="stylesheet" type="text/css" href="../header_style.css">
    <!-- main.css -->
    <link rel="stylesheet" type="text/css" href="../css/main_style.css">
    <!-- maincategory.css -->
    <link rel="stylesheet" type="text/css" href="../css/main_category_list.css">

    <style type="text/css">
        .product_bg {
            display: flex;
            justify-content: center;
            width: 1200px;
            height: 900px;
            background: darkgreen;
            margin: auto;
        }

        .product_img_bg {
            display: block;
            width: 600px;
            height: 850px;
            background-color: rgb(222, 222, 222);
            margin: 10px;
        }

        .product_img {
            margin: auto;
            width: 580px;
            height: 600px;
            background-color: #346AFF;
        }

        .product_pager {
            margin: 10px auto;
            width: 580px;
            height: 80px;
            background-color: #346AFF;
        }

        .product_review {
            margin: 10px auto;
            width: 580px;
            height: 50px;
            line-height: 50px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            font-size: 20px;
        }

        .product_rel_evt {
            margin: 10px auto;
            width: 580px;
            height: 80px;
            line-height: 80px;
            font-size: 20px;
            border-bottom: 1px solid black;
        }

        .proruct_txt {
            margin: 10px;
            width: 850px;
            height: 750px;
            background-color: rgb(0, 222, 222);
        }


        .banner_ {
            width: auto;
            height: 100px;
            margin: auto;

            background-color: darkorange;
        }

        .produnct_info_bg {
            position: relative;
            width: 1280px;
            height: auto;
            margin: auto;
            background-color: cornsilk;
        }

        .side_opt {
            position: relative;
            width: 300px;
            height: 800px;
            background-color: aqua;
            float: right;
        }

        .produnct_info {
            width: 960px;
            height: 2000px;
            background-color: cornflowerblue;
            margin: 10px;
        }

        .produnct_sale {
            width: 1240px;
            height: 400px;
            background-color: cornflowerblue;
            margin: 10px auto;
        }

        .produnct_review {
            width: 1240px;
            height: 400px;
            background-color: cornflowerblue;
            margin: 10px auto;
        }

        .other_produnct_info_bg {
            width: 1240px;
            height: 500px;
            margin: auto;
            background-color: cornflowerblue;
        }

        .product_name {
            margin: 20px;
            font-size: 30px;
        }

        .product_price {
            margin: 20px;
            font-size: 30px;
            font-weight: bold;
        }

        .product_chk_shp {
            margin: 20px;
            font-size: 20px;
        }

        .product_sale_info {
            margin: 20px;
            font-size: 30px;
        }

        .product_shipping_info {
            margin: 20px;
            font-size: 30px;
        }

        .product_btn_styBox {
            height: 60px;
            margin: 20px;
        }

        .proruct_txt select {
            width: 280px;
            height: 30px;
        }

        .select_txt {
            margin: 10px 20px;
            height: 30px;
            font-size: 20px;
        }

        .select_complete {
            margin: 40px 20px;
            height: 80px;
            background-color: cadetblue;
        }

        .product_sum_price {
            margin: 30px 20px;
            font-size: 20px;
            text-align: right;
        }

        .product_sum_price_num {
            font-size: 40px;
            color: red;

        }

        .product_amount {
            width: 40px;
            height: 30px;
            font-size: 20px;
            text-align: center;
            outline: 1px solid grey;
        }

        input:focus {
            outline: 1px solid grey;
        }

        /* outline 테두리 속성 수정 */


        /* outline 테두리 없애기 */
        .amount_btn {
            display: inline-block;
            width: 30px;
            height: 30px;
            font-size: 20px;
            text-align: center;
            border: 1px solid grey;
        }

        .btn_sty1 {
            float: left;
            display: inline-block;
            text-align: center;
            width: 210px;
            height: 60px;
            background-color: black;
            color: white !important;
            font-size: 18px;
            line-height: 60px;
        }

        .btn_sty2 {
            float: left;
            display: inline-block;
            text-align: center;
            width: 210px;
            height: 60px;
            background-color: #346AFF;
            color: white !important;
            font-size: 18px;
            line-height: 60px;
        }

        .btn_sty3 {
            float: left;
            display: inline-block;
            width: 60px;
            height: 60px;
            line-height: 60px;
            box-sizing: border-box;
            background-color: #ffffff;
            border: 1px solid #346AFF;
            text-align: center;

        }
    </style>

    <!-- javascript -->
    <!-- jQuery setup-->
    <script type="text/javascript" src="../js/jquery/jQuery-3.6.1.js"></script>
    <!-- bxslider script -->
    <script type="text/javascript" src="../src/js/jquery.bxslider.js"></script>
    <!-- form script -->
    <script type="text/javascript" src="../js/cupang.js"></script>
    <!-- use jQuery -->
    <script type="text/javascript" src="../js/cupang_jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // a href='#' 클릭 무시 스크립트
            $('a[href="#"]').click(function(ignore) {
                ignore.preventDefault();
            });

            //수량 밸류
            var val = parseInt($("#product_amount").val());
            //수량추가 버튼
            $("#amount_plus").click(function() {
                var val = parseInt($("#product_amount").val());
                val += 1;
                $("#product_amount").val(val);
                //console.log("클릭 : " + val);
                //console.log("밸 : " + $("#product_amount").val());
            });

            //수량제거 버튼
            $("#amount_minus").click(function() {
                var val = parseInt($("#product_amount").val());
                if (val > 0) {
                    val -= 1;
                    $("#product_amount").val(val);
                } else return false;
            });

            //수량 버튼 hover
            $("#amount_plus").hover(function() {
                $(this).css({
                    color: "#346AFF"
                });
            }, function() {
                $(this).css({
                    color: "black"
                });
            });
        });
    </script>

    <script type="text/javascript">
        //수량 수정 조정
        function chg_amount(txt) {
            var toNum = parseInt(txt);
            if (isNaN(toNum)) $("#product_amount").val(0);
            else $("#product_amount").val(toNum);
            //console.log(toInt);
        }
    </script>
</head>

<body>
    <div class="wrap">
        <h1>상품 페이지 전달 받을값:
            <p>상품 인덱스 get</p>
            <p>조회수</p>
            <p></p>
        </h1>
        <section class="cagt">카테고리</section>
        <section class="product_bg">
            <div class="product_img_bg">
                <div class="product_img">
                    <img src="" alt="">이미지
                </div>

                <div class="product_pager">
                    <p>페이저</p>
                </div>
                <div class="product_review">
                    <p>고객 리뷰 (별점)</p>
                </div>
                <div class="product_rel_evt">
                    <p>연관 상품</p>
                </div>
            </div>

            <div class="proruct_txt">
                <p class="product_name">상품 이름</p>
                <p class="product_price">가격</p>
                <p class="product_sale_info">혜택 및 할인정보</p>
                <p class="product_shipping_info">배송정보
                <p class="product_chk_shp"><input type="radio" name="prdt_delivery">로켓배송</p>
                <p class="product_chk_shp"><input type="radio" name="prdt_delivery">일반배송</p>
                </p>
                <p class="select_txt">상품 선택(사이즈 / 갯수 등) <select name="" id="">
                        <option value="">XS</option>
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">L</option>
                        <option value="">XL</option>
                        <option value="">XXL</option>
                    </select></p>
                <p class="select_txt">상품 선택(사이즈 / 갯수 등) <select name="" id="">
                        <option value="">빨</option>
                        <option value="">주</option>
                        <option value="">노</option>
                        <option value="">초</option>
                        <option value="">파</option>
                        <option value="">남</option>
                        <option value="">보</option>
                    </select></p>
                <p class="select_complete"><span> 색상/ 사이즈 값 가져오기</span><br>
                    <a href="#" class="amount_btn" id="amount_minus">-</a><input type="text" value="1" class="product_amount" id="product_amount" name="product_" onchange="return chg_amount(this.value)"><a href="#" class="amount_btn" id="amount_plus">+</a>
                    옵션 선택후 갯수 선택
                </p>

                <p class="product_sum_price">합계 <span class="product_sum_price_num">120,000</span> 원</p>
                <p class="product_btn_styBox">
                    <a href="" class="btn_sty1">장바구니</a>
                    <a href="" class="btn_sty2">바로구매</a>
                    <a href="" class="btn_sty3">선물</a>
                    <a href="" class="btn_sty3">찜하기</a>
                </p>
            </div>
        </section>
        <section class="banner_">배너</section>
        <section class="produnct_info_bg">
            <div class="side_opt">사이드 구매정보</div>
            <div class="produnct_info">상품정보/혜택구매정보/리뷰</div>
            <div class="produnct_sale">혜택구매정보</div>
            <div class="produnct_review">리뷰</div>
        </section>

        <section class="other_produnct_info_bg">
            다른 상품들 정보
        </section>
    </div>
</body>

</html>