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
            height: 800px;
            background: darkgreen;
            margin: auto;
        }

        .product_img {
            display: block;
            width: 600px;
            height: 700px;
            background-color: rgb(222, 222, 222);
            margin: 10px;
        }

        .proruct_txt {
            margin: 10px;
            width: 600px;
            height: 700px;
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
            font: 30px;
            font-weight: bold;
        }

        .product_sale_info {
            margin: 20px;
            font-weight: 30px;
        }

        .product_shipping_info {
            margin: 20px;
            font-weight: 30px;
        }

        .product_btn_styBox {
            height: 60px;
            margin: 20px;
        }

        .btn_sty1 {
            float: left;
            display: inline-block;
            text-align: center;
            width: 220px;
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
            width: 220px;
            height: 60px;
            background-color: #346AFF;
            color: white !important;
            font-size: 18px;
            line-height: 60px;
        }

        .btn_sty3 {
            float: left;
            display: inline-block;
            width: 50px;
            height: 60px;
            background-color: brown;
        }
    </style>
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
            <div class="product_img">
                <img src="" alt="">이미지
                <p>페이저</p>
                <p>리뷰</p>
                <p>연관 상품</p>
            </div>
            <div class="proruct_txt">
                <p class="product_name">상품 이름</p>
                <p class="product_price">가격</p>
                <p class="product_sale_info">혜택 및 할인정보</p>
                <p class="product_shipping_info">배송정보
                <p><input type="radio" name="prdt_delivery">로켓배송</p>
                <p><input type="radio" name="prdt_delivery">일반배송</p>
                </p>
                <p>상품 선택(사이즈 / 갯수 등)</p>
                <p>합계 가격</p>
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