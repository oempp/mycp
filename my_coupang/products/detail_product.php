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
    <!-- detail_product -->
    <link rel="stylesheet" type="text/css" href="../css/detail_product.css">

    <style type="text/css">

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

            $("#amount_minus").hover(function() {
                $(this).css({
                    color: "#346AFF"
                });
            }, function() {
                $(this).css({
                    color: "black"
                });
            });

            /* banner slider */
            var BxSlider = $(".bx_slider_mainImg").bxSlider({
                mode: "fade", // 가로 방향 수평 슬라이드
                speed: 1000, // 이동 속도를 설정
                pause: 3000, // 슬라이드가 보여지는 시간
                pager: true, // 현재 위치 페이징 표시 여부 설정
                moveSlides: 1, // 슬라이드 이동시 개수
                infiniteLoop: true, //true | (false, true) | true면 마지막에서 첫번째로 전환 그 반대도 동일, 무한루프
                //slideWidth: 100,   // 슬라이드 너비
                //minSlides: 4,      // 최소 노출 개수
                //maxSlides: 4,      // 최대 노출 개수
                //slideMargin: 5,    // 슬라이드간의 간격
                auto: true, // 자동 실행 여부
                autoHover: false, // 마우스 호버시 정지 여부
                controls: false, // 이전 다음 버튼 노출 여부
                pagerCustom: ".product_pager", // 페이저

                onSlideBefore: function() { // 슬라이드 전환 전 마다 콜백

                    // 백그라운드 색상 변경 함수
                    /*                 function changeBgColor(color) {
                                        var color = $(".main_banner_bg").css({
                                            transition: "1s",
                                            backgroundColor: color
                                        });
                                    } */

                }
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
                    <div class="bx_slider_mainImg">
                        <img src="/my_coupang/images/producnts/P.00000001/P.00000001_main.jpg" alt="">
                        <img src="/my_coupang/images/producnts/P.00000001/P.00000001_02.jpg" alt="">
                        <img src="/my_coupang/images/producnts/P.00000001/P.00000001_04.jpg" alt="">
                        <img src="/my_coupang/images/producnts/P.00000001/P.00000001_06.jpg" alt="">
                        <img src="/my_coupang/images/producnts/P.00000001/P.00000001_08.jpg" alt="">
                    </div>

                    <div class="product_pager">
                        <p>페이저</p>
                        <p>페이저</p>
                        <p>페이저</p>
                    </div>
                    <div class="product_review">
                        <p>고객 리뷰 (별점)</p>
                    </div>
                    <div class="product_rel_evt">
                        <p>연관 상품</p>
                    </div>
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
            <div class="produnct_info">상품정보/혜택구매정보/리뷰
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_info1.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_info2.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_info3.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_main.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_01.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_02.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_03.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_04.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_05.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_06.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_07.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_08.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_09.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_10.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_caution1.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_caution2.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_caution3.jpg" alt="">
            </div>
            <div class="produnct_sale">혜택구매정보</div>
            <div class="produnct_review">리뷰</div>
        </section>

        <section class="other_produnct_info_bg">
            다른 상품들 정보
        </section>
    </div>
</body>

</html>