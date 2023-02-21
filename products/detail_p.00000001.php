<?php
//세션
include "../inc/session.php";
//상품코드 
include "../inc/product_code.php";

//페이저 클릭시 y스크롤 값 받아오기
$movePos = isset($_GET['movePos']) ? $_GET['movePos'] : "0";

// DB 연결
include "../inc/dbcon.php";

/* 상품코드 꼭 전송 받을것 */
// p_code 
$p_code = isset($_GET["p_code"]) ? $_GET["p_code"] : "isEmpty";
//임시 p_code
$p_code = "p.00000001";
// echo $p_code;
///////////////////////////////// product 쿼리 /////////////////////////////////
// 테이블 이름
$p_table_name = "product";
//쿼리 작성
$p_sql = "select * from $p_table_name where p_code='$p_code';";
//쿼리 전송
$p_result = mysqli_query($dbcon, $p_sql);
//쿼리 받기
$p_array = mysqli_fetch_array($p_result);

/* 페이저 구현 */
///////////////////////////////// cmt 쿼리 /////////////////////////////////
// 테이블 이름
$table_name = "product_cmt";
//쿼리 작성
if ($p_code) {
    $sql = "select * from $table_name where p_code='$p_code';";
} else {
    $sql = "select * from $table_name;";
}
// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if ($s_pageNum <= 0) {
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if ($e_pageNum > $total_page) {
    $e_pageNum = $total_page;
};

///////////////////////////////// qna 쿼리 /////////////////////////////////
// 테이블 이름
$qna_table_name = "product_qna";
//쿼리 작성
if ($p_code) {
    $qna_sql = "select * from $qna_table_name where p_code='$p_code';";
} else {
    $qna_sql = "select * from $qna_table_name;";
}
// 쿼리 전송
$qna_result = mysqli_query($dbcon, $qna_sql);

// 전체 데이터 가져오기
$qna_total = mysqli_num_rows($qna_result);

// paging : 한 페이지 당 보여질 목록 수
$qna_list_num = 5;

// paging : 한 블럭 당 페이지 수
$qna_page_num = 3;

// paging : 현재 페이지
$qna_page = isset($_GET["qna_page"]) ? $_GET["qna_page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$qna_total_page = ceil($qna_total / $qna_list_num);
// echo "전체 페이지수 : ".$qna_total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$qna_total_block = ceil($qna_total_page / $qna_page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$qna_now_block = ceil($qna_page / $qna_page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$qna_s_pageNum = ($qna_now_block - 1) * $qna_page_num + 1;
if ($qna_s_pageNum <= 0) {
    $qna_s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$qna_e_pageNum = $qna_now_block * $qna_page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if ($qna_e_pageNum > $qna_total_page) {
    $qna_e_pageNum = $qna_total_page;
};


?>

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
    <!-- mainp_codegory.css -->
    <link rel="stylesheet" type="text/css" href="../css/main_p_codegory_list.css">
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
            $('a[href="#"]').click(function(e) {
                e.preventDefault();
            });


            /* 1번 옵션 */
            //수량 밸류
            var val = parseInt($("#product_amount").val());
            var val2 = parseInt($("#product_amount2").val());
            //수량추가 버튼
            $("#amount_plus").click(function() {
                var val = parseInt($("#product_amount").val());
                val += 1;
                $("#product_amount").val(val);
                $("#product_amount2").val(val);
                $(".sum_price").val($("#product_amount").val() *
                    parseInt(<?php echo $p_array['p_price'] ?>));
            });

            //수량제거 버튼
            $("#amount_minus").click(function() {
                var val = parseInt($("#product_amount").val());
                if (val > 0) {
                    val -= 1;
                    $("#product_amount").val(val);
                    $("#product_amount2").val(val);
                    $(".sum_price").val($("#product_amount").val() *
                        parseInt(<?php echo $p_array['p_price'] ?>));
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

            /* 2번 옵션 */
            //수량추가 버튼
            $("#amount_plus2").click(function() {
                var val = parseInt($("#product_amount2").val());
                val += 1;
                $("#product_amount").val(val);
                $("#product_amount2").val(val);
                $(".sum_price").val($("#product_amount").val() * parseInt(<?php echo $p_array['p_price'] ?>));
                //console.log("클릭 : " + val);
                //console.log("밸 : " + $("#product_amount").val());
            });

            //수량제거 버튼
            $("#amount_minus2").click(function() {
                var val = parseInt($("#product_amount2").val());
                if (val > 0) {
                    val -= 1;
                    $("#product_amount").val(val);
                    $("#product_amount2").val(val);
                    $(".sum_price").val($("#product_amount").val() * parseInt(<?php echo $p_array['p_price'] ?>));
                } else return false;
            });

            //수량 버튼 hover
            $("#amount_plus2").hover(function() {
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

            //더보기 버튼
            $(".viewmore").click(function() {
                $(".produnct_more_img").fadeToggle(1);
            })

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

            /*             $(".no_scroll").click(function(e) {
                            //Cancel the link behavior
                            var topPosition = $(window).scrollTop();
                            console.log("topPosition : " + topPosition);
                            window.scrollTo(0, topPosition);
                            //e.preventDefault();
                        }); */

            //qna 보기
            $(".show_qna").click(function() {
                //alert("클릭")
                $(this).parent().parent().next(".hide_qna").toggle();
                $(this).parent().parent().next().next(".hide_qna").toggle();
            })

        });

        //가격 변환
        $(".sum_price").value.change(function() {
            $(this).toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        })
    </script>

    <script type="text/javascript">
        console.log("topPosition : " + <?php echo $movePos ?>);


        var SUM_PRICE = 0;
        //수량 수정 조정
        function chg_amount(txt) {
            var toNum = parseInt(txt);
            if (isNaN(toNum)) {
                $("#product_amount").val(0);
                $("#product_amount2").val(0);
                $(".sum_price").val($("#product_amount").val() * parseInt(<?php echo $p_array['p_price'] ?>));
            } else {
                $("#product_amount").val(toNum);
                $("#product_amount2").val(toNum);
                $(".sum_price").val($("#product_amount").val() * parseInt(<?php echo $p_array['p_price'] ?>));
            }
            //console.log(toInt);
        }


        //리뷰 팝업
        function cmt_popup() {
            window.open('write_cmt.php', '상품 리뷰', 'width=500px, height=800px');
        }

        //문의 팝업
        function qna_popup() {
            window.open('write_qna.php', '문의남기기', 'width=500px, height=800px');
        }

        //페이저 클릭 스크롤 위치 저장
        function scrollPos() {
            window.scrollTop();
            console.log(window.scrollTop());
            return false;
        }

        function NumRpl(int) {
            /* 가격 1000의자리 쉼표 찍기 */
            var rpl_price = int.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
            // document.writeln(rpl_price);
            return rpl_price;
        }


    </script>
</head>

<body>
    <div class="wrap">
        <h1>
        </h1>
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../inc/header_part.php" ?>
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

                    </div>
                    <div class="product_review">
                        <p>고객 리뷰 (별점)</p>
                    </div>
                    <!--                     <div class="product_rel_evt">
                        <p>연관 상품</p>
                    </div> -->
                </div>
            </div>
            <div class="proruct_txt">
                <p class="product_name"><?php echo $p_array['p_name'] ?></p>
                <p class="product_price">
                    <script type="text/javascript">
                        var price = <?php echo $p_array['p_price'] ?>;
                        /* 가격 1000의자리 쉼표 찍기 */
                        var rpl_price = price.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
                        document.writeln(rpl_price);
                    </script>
                    원
                </p>
                <p class="product_sale_info">혜택 및 할인정보</p>
                <p class="product_shipping_info">배송정보
                <p class="product_chk_shp"><input type="radio" name="prdt_delivery">로켓배송</p>
                <p class="product_chk_shp"><input type="radio" name="prdt_delivery">일반배송</p>
                </p>
                <p class="select_txt">상품 선택(사이즈 / 갯수 등) <select name="sel_opt1" id="">
                        <option value="">XS</option>
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">L</option>
                        <option value="">XL</option>
                        <option value="">XXL</option>
                    </select></p>
                <p class="select_txt">상품 선택(사이즈 / 갯수 등) <select name="sel_opt2" id="">
                        <option value="">빨강(Red)</option>
                        <option value="">주황(Orange)</option>
                        <option value="">노랑(Yellow)</option>
                        <option value="">초록(Green)</option>
                        <option value="">파랑(Blue)</option>
                        <option value="">보라(Purple)</option>
                    </select></p>
                <p class="select_complete">
                    <a href="#" class="amount_btn" id="amount_minus">-</a><input type="text" value="1" class="product_amount" id="product_amount" name="product_" onchange="return chg_amount(this.value)"><a href="#" class="amount_btn" id="amount_plus">+</a>
                    옵션 선택후 수량 조절
                </p>

                <p class="product_sum_price">합계 <span class="product_sum_price_num">
                        <input class="sum_price" type="text" value="<?php echo $p_array['p_price'] ?>" onchange="return NumRpl(this.value)" readonly>
                    </span> 원</p>
                <p class="product_btn_styBox">
                    <a href="#return false()" class="btn_sty1">장바구니</a>
                    <a href="#return false()" class="btn_sty2">바로구매</a>
                    <a href="#return false()" class="btn_sty3">선물</a>
                    <a href="#return false()" class="btn_sty3">찜하기</a>
                </p>
            </div>
        </section>
        <section class="banner_">
            <img src="/my_coupang/images/main/main_banner04.jpg" alt="">
        </section>
        <section class="produnct_info_bg">
            <div class="side_opt">
                <p class="select_txt">사이즈</p>
                <p class="select_txt"><select name="sel_opt1" id="">
                        <option value="">XS</option>
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">L</option>
                        <option value="">XL</option>
                        <option value="">XXL</option>
                    </select></p>
                <p class="select_txt">색상</p>
                <p class="select_txt"><select name="sel_opt2" id="">
                        <option value="">빨</option>
                        <option value="">주</option>
                        <option value="">노</option>
                        <option value="">초</option>
                        <option value="">파</option>
                        <option value="">남</option>
                        <option value="">보</option>
                    </select></p>
                <p class="select_complete">
                    <a href="#" class="amount_btn" id="amount_minus2">-</a><input type="text" value="1" class="product_amount" id="product_amount2" name="product_" onchange="return chg_amount(this.value)"><a href="#" class="amount_btn" id="amount_plus2">+</a>
                    옵션 선택 후 수량 조절
                </p>
                <div class="box">77우먼스 여성 하이클래스 셔츠 쉬폰혼방 롱셔츠 상의</div>
                <p class="product_sum_price">합계 <span class="product_sum_price_num">
                        <input class="sum_price" type="text" value="<?php echo $p_array['p_price'] ?>" readonly>
                    </span> 원</p>
                <p class="product_btn_styBox">
                    <a href="" class="btn_sty4">바로구매</a>
                    <a href="" class="btn_sty5">장바구니</a>
                    <a href="" class="btn_sty6">선</a>
                    <a href="" class="btn_sty6">찜</a>
                </p>
            </div>
            <div class="produnct_info">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_info1.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_info2.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_info3.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_main.jpg" alt="">
                <button class="viewmore">상품 정보 더보기</button>
                <div class="produnct_more_img">
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
                </div>
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_caution1.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_caution2.jpg" alt="">
                <img src="/my_coupang/images/producnts/P.00000001/P.00000001_caution3.jpg" alt="">

            </div>
        </section>

        <section>
            <div class="produnct_required_info">
                <h3>상품 필수 정보</h3>
                <table class="Required_info">
                    <tr>
                        <th>품명 및 모델명</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>KC 인증 필 유무</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>정격전압, 소비전력,<Br>에너지소비 효율등급</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>으뜸효율가전 환급여부</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>동일모델의 출시년월</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>크기</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>냉난방면적</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>추가설치비용</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>품질보증기준</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>A/S 책임자 및 전화번호</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>제조사/수입자</th>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>제조국</th>
                        <td>N/A</td>
                    </tr>
                </table>
            </div>

            <div class="produnct_shp_info">
                <h3>배송 안내</h3>
                <table class="shp_info">
                    <tr>
                        <th></th>
                        <td class="width_600">
                            <p>택배 배송</p>
                            <p>업체 및 산지에서 주문 후 평균 2~3일 이내 택배 배송됩니다.</p>
                        </td>
                        <td>상품상세 상단 표기된 배송비 참고</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <p>프리미엄 배송</p>
                            <p>특수 금고 차량을 통해 원하는 날짜와 시간에 상품이 안전하게 배송됩니다. <a href="">더 알아보기</a></p>

                        </td>
                        <td>상품상세 상단에 표기된 배송비 참고</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <p>매장픽업</p>
                            오프라인 매장에서 직접 방문해서 상품을 픽업! 더 빠르게 만나보세요!
                        </td>
                        <td>
                            배송비 없음</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>해외직구
                            해외 브랜드 혹은 협력 업체가 소싱한 상품이 해외에서 고객님께 배송됩니다.</td>
                        <td>상품상세 상단 표기된 배송비 참고</td>
                    </tr>
                </table>
                <p>ㆍ택배 배송기일은 휴일 포함여부 및 상품 재고상황, 택배사 사정에 의해 지연될 수 있습니다.</p>
                <p>ㆍ제주/도서산간 지역은 추가 운임이 발생할 수 있습니다.</p>
                <p>ㆍ[다중배송] 장바구니에서 여러 주소지로 한번에 주문 결제가 가능합니다. (일부상품 제외)</p>

            </div>

            <div class="produnct_sale">
                <div>
                    <h3>교환 및 반품 안내</h3>
                    <table class="exchange_returns">
                        <tr>
                            <th>교환반품 신청기간</th>
                            <td>
                                <p>단순변심 및 사이즈/색상 불만에 관련된 교환/반품 신청은 배송완료 후 7일 이내에 가능합니다.</p>
                                <p>상품이 표기/광고내용과 다르거나 계약내용과 다른 경우 상품을 받으신 날부터 3개월 이내,</p>
                                <p>또는 사실을 알게된 날(알 수 있었던 날)부터 30일 이내에 신청 가능합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>교환/반품 회수(배송)비용</th>
                            <td>
                                <p>상품의 불량/하자 또는 표시광고 및 계약 내용과 다른 경우 해당 상품의 회수(배송)비용은 무료이나,</p>
                                <p>고객님의 단순변심 및 사이즈/색상 불만에 관련된 교환/반품의 경우 택배비는 고객님 부담입니다.</p>
                                <p>※ 구매 시 선택한 옵션과 수량 또는 프로모션 적용 여부에 따라 반품/교환 배송비가 변경될 수 있습니다.</p>
                                <p>자세한 반품/교환 배송비는 MY SSG에서 반품/교환 시 확인 가능합니다.</p>
                                <p>반품 배송비: 2,500원 (최초 배송비가 무료인 경우, 5,000원 부과)</p>
                                <p>교환 배송비: 5,000원</p>
                                <p>제주/도서산간 지역은 추가 운임이 발생할 수 있습니다. 단, 반품/교환 비용은 상품 및 반품/교환 사유에 따라 변경될 수 있으므로</p>
                                <p>반품/교환 신청 화면에서 확인 부탁드립니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>교환/반품 불가 안내</th>
                            <td>
                                <p><b>전자상거래 등에서 소비자보호에 관한 법률에 따라 다음의 경우 청약철회가 제한될 수 있습니다.</b></p>
                                <p>고객님이 상품 포장을 개봉하여 사용 또는 설치 완료되어 상품의 가치가 훼손된 경우</p>
                                <p>(단, 내용 확인을 위한 포장 개봉의 경우는 예외)</p>
                                <p>고객님의 단순변심으로 인한 교환/반품 신청이 상품 수령한 날로부터 7일이 경과한 경우</p>
                                <p>신선식품(냉장/냉동 포함)을 단순변심/주문착오로 교환/반품 신청하는 경우</p>
                                <p>고객님의 사용 또는 일부 소비에 의해 상품의 가치가 훼손된 경우</p>
                                <p>시간 경과에 따라 상품 등의 가치가 현저히 감소하여 재판매가 불가능한 경우</p>
                                <p>복제가 가능한 재화 등의 포장을 훼손한 경우(DVD, CD, 도서 등 복제 가능한 상품)</p>
                                <p>고객님이 이상 여부를 확인한 후 설치가 완료된 상품의 경우(가전, 가구, 헬스기구 등)</p>
                                <p>고객님의 요청에 따라 개별적으로 주문제작되는 상품으로 재판매가 불가능한 경우(이니셜 표시상품, 사이즈 맞춤상품 등)</p>
                                <p>구매한 상품의 구성품이 누락된 경우(화장품 세트, 의류부착 악세서리, 가전제품 부속품, 사은품 등)</p>
                                <p>기타, 상품의 교환, 환불 및 상품 결함 등의 보상은 소비자분쟁해결기준(공정거래위원회 고시)에 의함</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section>
            <div class="produnct_review_bg">
                <h3 id="h3">상품 리뷰</h3>
                <?php
                // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                $start = ($page - 1) * $list_num;

                // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                // limit 몇번부터, 몇 개 + 카테고리
                // 쿼리 작성
                if ($p_code) { //상품 코드로 구분해서 맞는 댓글만 표시
                    $sql = "select * from $table_name where p_code='$p_code' order by idx desc limit $start, $list_num;";
                } else {
                    $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
                };

                // DB에 데이터 전송
                $result = mysqli_query($dbcon, $sql);

                // DB에서 데이터 가져오기
                // pager : 글번호(역순)
                // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
                $i = $total - (($page - 1) * $list_num);
                ?>
                <p class="write_area">
                    <span><a href="#none" onclick="cmt_popup()"><span class="write_btn">리뷰작성</span></a></span>
                </p>

                <?php while ($array = mysqli_fetch_array($result)) {
                ?>
                    <p>
                        <span class="width_cmt_title"><?php echo $array["cmt_title"]; ?></span>
                        <span class="width_auto">
                            <?php if ($array["cmt_score"] == 5) { ?>
                                <img src="/my_coupang/images/main/grade5.png" alt="">
                            <?php } else if ($array["cmt_score"] == 4) { ?>
                                <img src="/my_coupang/images/main/grade4.png" alt="">
                            <?php } else if ($array["cmt_score"] == 3) { ?>
                                <img src="/my_coupang/images/main/grade3.png" alt="">
                            <?php } else if ($array["cmt_score"] == 2) { ?>
                                <img src="/my_coupang/images/main/grade2.png" alt="">
                            <?php } else if ($array["cmt_score"] == 1) { ?>
                                <img src="/my_coupang/images/main/grade1.png" alt="">
                            <?php } ?>
                        </span>
                        <!-- 사용자 아이디 숨기기 -->
                        <span class="width_130"><b>
                                <?php $rplName = substr_replace($array["cmt_name"], "*********", 3);
                                echo $rplName; ?></b></span>
                        <span class="width_130"><?php echo $array["cmt_date"]; ?></span>
                        <span class="width_50"><?php echo $array["cmt_cnt"]; ?></span>
                    </p>
                    <div class="cmt_cont_box">
                        <p class="cmt_cont"><?php echo $array["cmt_content"]; ?></p>
                    </div>
                <?php
                    $i--;
                };
                ?>

                <p class="pager">
                    <?php
                    // pager : 이전 페이지
                    if ($page <= 1) {
                    ?>
                        <a href="#" onclick="location.href ='/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&page=1'" onclick="scrollPos()"> 〈 </a>
                    <?php } else { ?>
                        <a href="#" onclick="location.href ='/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&page=<?php echo ($page - 1); ?>'" onclick="scrollPos()"> 〈 </a>
                    <?php }; ?>

                    <?php
                    // pager : 페이지 번호 출력
                    for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) {
                    ?>
                        <a href="/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&page=<?php echo $print_page; ?>" onclick="scrollPos()"><?php echo $print_page; ?></a>
                    <?php }; ?>

                    <?php
                    // pager : 다음 페이지
                    if ($page >= $total_page) {
                    ?>
                        <a href="/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&page=<?php echo $total_page; ?>" onclick="scrollPos()"> 〉 </a>
                    <?php } else { ?>
                        <a href="/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&page=<?php echo ($page + 1); ?>" onclick="scrollPos()"> 〉 </a>
                    <?php }; ?>
                </p>
            </div>
        </section>

        <section class="other_produnct_info_bg">
            <h3>상품 Q&A</h3>

            <p class="write_area">
                <span>전체 (<?php echo $qna_total; ?>)</span>
                <span>답변완료 (<?php echo $qna_total ?>)</span>
                <span>답변대기 (<?php echo $qna_total; ?>)</span><a href="#none" onclick="qna_popup()"><span class="write_btn">문의 남기기</span></a>
            </p>
            <!-- 테이블 게시판 -->
            <table class="board_list_set">
                <tr class="board_list_title">
                    <th class="no">번호</th>
                    <th class="ans">답변</th><?php
                                            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                                            $qna_start = ($qna_page - 1) * $qna_list_num;
                                            $qna_table_name = 'product_qna';
                                            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                                            // limit 몇번부터, 몇 개 + 카테고리
                                            // 쿼리 작성
                                            if ($p_code) { //상품 코드로 구분해서 맞는 댓글만 표시
                                                $qna_sql = "select * from $qna_table_name where p_code='$p_code' order by idx desc limit $qna_start, $qna_list_num;";
                                            } else {
                                                $qna_sql = "select * from $qna_table_name order by idx desc limit $qna_start, $qna_list_num;";
                                            };

                                            // DB에 데이터 전송
                                            $qna_result = mysqli_query($dbcon, $qna_sql);

                                            // DB에서 데이터 가져오기
                                            // pager : 글번호(역순)
                                            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
                                            $j = $qna_total - (($qna_page - 1) * $qna_list_num);
                                            ?>
                    <th class="b_title">제목</th>
                    <th class="b_name">작성자</th>
                    <th class="w_date">날짜</th>
                    <th class="cnt">조회수</th>
                </tr>

                <?php
                while ($array = mysqli_fetch_array($qna_result)) {
                ?>
                    <tr class="board_list_content">
                        <td><?php echo $j; ?></td>
                        <td><?php if (!$array['qna_answer_check']) echo "답변대기중";
                            else if ($array['qna_answer_check']) echo "답변완료"; ?></td>
                        <span></span>
                        <td class="board_content_title" style="text-align : left;">
                            <a class="show_qna" href="#">

                                [ <?php

                                    if ($array["qna_cate"] == "q_basic") {
                                        echo "일반";
                                    } else if ($array["qna_cate"] == "q_product") {
                                        echo "상품문의";
                                    } else if ($array["qna_cate"] == "q_shipping") {
                                        echo "배송문의";
                                    } else if ($array["qna_cate"] == "q_exchange") {
                                        echo "교환/반품문의";
                                    } else if ($array["qna_cate"] == "q_etc") {
                                        echo "기타문의";
                                    };
                                    ?> ]
                                <?php echo $array["qna_title"]; ?>
                                <!--                                 <script type="text/javascript">
                                    //문의 팝업
                                    function view_popup() {
                                        window.open('view_qna.php?b_idx=<?php echo $array["idx"]; ?>', '답변', 'width=500px, height=800px');
                                    }
                                </script> -->
                            </a>
                        </td>
                        <td><?php $rplName = substr_replace($array["qna_name"], "*********", 3);
                            echo $rplName; ?></b></span></td>
                        <?php $qna_date = substr($array["qna_date"], 0, 10); ?>
                        <td><?php echo $qna_date; ?></td>
                        <td><?php echo $array["qna_cnt"]; ?></td>
                    </tr>
                    <tr class="hide_qna">
                        <td></td>
                        <td>내용</td>
                        <td>
                            <div class="qna_cont_box">
                                <p class="qna_cont"><?php echo $array["qna_content"]; ?></p>
                                <p><a href="answer_qna.php?q_idx=<?php echo $array["idx"]; ?>">답변하기</a></p>
                        <td></td>
                        <td></td>
                        <td>
                            <p></p>
                        </td>
                        </td>
                    </tr>
                    <?php
                    if ($array['qna_answer_check']) { ?>
                        <tr class="hide_qna">
                            <td class="aaaa11"></td>
                            <td class="aaaa11">답변</td>
                            <td class="aaaa11">
                                <p class="answer_cont"><?php echo $array['qna_answer'] ?></p>
                            </td>
                            <td class="aaaa11">관리자</td>
                            <td class="aaaa11">
                                <p><?php echo $array['qna_answer_check'] ?></p>
                            </td>
                            <td class="aaaa11"></td>
                        </tr>
                    <?php } ?>
                    <!-- 임시 내용 표기 -->

    </div>
<?php
                    $j--;
                };
?>

</table>
<p class="pager">
    <?php
    // pager : 이전 페이지
    if ($qna_page <= 1) {
    ?>
        <a href="/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&qna_page=1&movePos=22000"> 〈 </a>
    <?php } else { ?>
        <a href="/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&qna_page=<?php echo ($qna_page - 1); ?>&movePos=22000"> 〈 </a>
    <?php }; ?>

    <?php
    // pager : 페이지 번호 출력
    for ($qna_print_page = $qna_s_pageNum; $qna_print_page <= $qna_e_pageNum; $qna_print_page++) {
    ?>
        <a href="/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&qna_page=<?php echo $qna_print_page; ?>&movePos=22000"><?php echo $qna_print_page; ?></a>
    <?php }; ?>

    <?php
    // pager : 다음 페이지
    if ($qna_page >= $qna_total_page) {
    ?>
        <a href="#" onclick="location.href='/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&qna_page=<?php echo $qna_total_page; ?>&movePos=22000'"> 〉 </a>
    <?php } else { ?>
        <a href="#" onclick="location.href='/my_coupang/products/detail_<?php echo $p_code; ?>.php?p_code=<?php echo $p_code; ?>&qna_page=<?php echo ($qna_page + 1); ?>&movePos=21000'"> 〉 </a>
    <?php }; ?>
</p>
<!-- 테이블 게시판 -->
</section>
<!-- FOOTER -->
<?php include "../inc/footer_part.php" ?>
</div>
</body>

</html>