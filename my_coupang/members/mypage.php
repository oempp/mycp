<?php
include "../inc/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
    <link rel="stylesheet" type="text/css" href="../css/init.css">
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
    <!-- login.css -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- user sevice.css -->
    <link rel="stylesheet" type="text/css" href="../css/user_service.css">
    <!-- mypage.css -->
    <link rel="stylesheet" type="text/css" href="../css/mypage.css">

    <!-- javascript -->
    <!-- jQuery setup-->
    <script type="text/javascript" src="../js/jquery/jQuery-3.6.1.js"></script>
    <!-- bxslider script -->
    <script type="text/javascript" src="../src/js/jquery.bxslider.js"></script>
    <!-- form script -->
    <script type="text/javascript" src="../js/cupang.js"></script>
    <!-- use jQuery -->
    <script type="text/javascript" src="../js/cupang_jquery.js"></script>

    <style type="text/css">
        .cont_grade5 {
            float: left;
            width: 75px;
            height: 13px;
            margin: 3px 3px 0px 0px;
            text-indent: -9999px;
            background: url(../images/main/grade5.png);
            clear: both;
        }

        .cont_grade4 {
            float: left;
            width: 75px;
            height: 13px;
            margin: 3px 3px 0px 0px;
            text-indent: -9999px;
            background: url(../images/main/grade4.png);
            clear: both;
        }

        .cont_grade3 {
            float: left;
            width: 75px;
            height: 13px;
            margin: 3px 3px 0px 0px;
            text-indent: -9999px;
            background: url(../images/main/grade3.png) no-repeat;
            clear: both;
        }

        .cont_grade2 {
            float: left;
            width: 75px;
            height: 13px;
            margin: 3px 3px 0px 0px;
            text-indent: -9999px;
            background: url(../images/main/grade2.png);
            clear: both;
        }

        .cont_grade1 {
            float: left;
            width: 75px;
            height: 13px;
            margin: 3px 3px 0px 0px;
            text-indent: -9999px;
            background: url(../images/main/grade1.png);
            clear: both;
        }

        .cont_rck_icn {
            display: block;
            width: 70px;
            height: 21px;
            text-indent: -9999px;
            background: url(../images/main/rocket_icon_70x21.jpg);
            float: left;

        }

        .cont_rckfresh_icn {
            display: block;
            width: 84px;
            height: 21px;
            text-indent: -9999px;
            background: url(../images/main/fresh_icon_84x21.jpg);
            float: left;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../inc/header_part.php" ?>
        <!-- main -->
        <main style="width: 1290px; height:1800px; margin: auto">
            <section>
                <div class="my_infobox">
                    <div class="info_mygrade_box">
                        <p class="fontsize_20"><span id="user_id"><?php echo $s_name?></span> 님의 My coupang</p>
                        <img class="info_mycoupang_imgbox" src="../images/mypage/human_icon_52x52.png" alt="사람모양아이콘">
                        <div class="info_mycoupang_txtbox">
                            <p class="fontsize_20">일반등급</p>
                            <p><a hhref="#">Coupang 등급혜택 보기 ></a></p>
                        </div>

                    </div>
                    <div class="info_coupon_box">
                        <p class="fontsize_20">쿠폰</p>
                        <p><span class="fontsize_20">7</span> 장</p>
                        <p class="info_coupon_txt01">다운로르 가능한 등급쿠폰</p>
                        <p class="info_coupon_txt02">0장</p>
                        <p class="info_coupon_txt03">7일이내 만료예정 쿠폰</p>
                        <p class="info_coupon_txt04">0장</p>
                    </div>

                    <div class="info_coupang_money_box">
                        <p class="fontsize_20">쿠팡머니</p>
                        <p class="fontsize_20_bold"><span class="fontsize_20">5,720</span> 원</p>
                        <p class="info_coupangmoney_txt01">계좌</p>
                        <p class="info_coupangmoney_txt02">한국은행</p>
                        <p class="info_coupangmoney_txt03">카드</p>
                        <p class="info_coupangmoney_txt04">한국카드(347*)</p>
                    </div>

                    <div class="info_coupang_point_box">
                        <p class="fontsize_20">쿠팡포인트</p>
                        <p class="fontsize_20"><span class="fontsize_20">36,780</span> p</p>
                        <p class="info_coupang_point_txt01">적립 포인트는<br>다음날 반영됩니다</p>
                    </div>
                </div>
            </section>

            <div class="yellow_bar">
                <p class="hidden">노란줄</p>
            </div>


            <section class="mainbg_box">
                <section style="width: 1280px; margin: auto;">
                    <div class="side_menubox">
                        <h2 class="hidden">사이드바</h2>
                        <div class="user_shipping_management">
                            <h3>나의 주문관리</h3>
                            <ul>
                                <li><a hhref="#">주문/배송조회</a></li>
                                <li><a hhref="#">구매내역</a></li>
                                <li><a hhref="#">자구구매 상품</a></li>
                                <li><a hhref="#">정기배송 설정관리</a></li>
                                <li><a hhref="#">여행예약 조회</a></li>
                            </ul>
                        </div>

                        <div class="user_benefits_management">
                            <h3>나의 혜택관리</h3>
                            <ul>
                                <li><a hhref="#">쿠폰</a></li>
                                <li><a hhref="#">쿠팡머니</a></li>
                                <li><a hhref="#">쿠팡포인트</a></li>
                                <li><a hhref="#">기프트카드</a></li>
                                <li><a hhref="#">국민용돈</a></li>
                                <li><a hhref="#">클럽관리</a></li>
                            </ul>
                        </div>

                        <div class="user_act_management">
                            <h3>나의 활동관리</h3>
                            <ul>
                                <li><a hhref="#">찜목록</a></li>
                                <li><a hhref="#">마이 리뷰</a></li>
                                <li><a hhref="#">새벽배송 관리</a></li>
                                <li><a hhref="#">로켓배송 관리</a></li>
                                <li><a hhref="#">스탬프 내역</a></li>
                                <li><a hhref="#">이벤트 참여현황</a></li>
                                <li><a hhref="#">상품 Q&A</a></li>
                                <li><a hhref="#">입고알림 내역</a></li>
                            </ul>
                        </div>

                        <div class="user_info_management">
                            <h3>나의 정보 관리</h3>
                            <ul>
                                <li><a hhref="#">회원정보 변경</a></li>
                                <li><a hhref="#">비밀번호 변경</a></li>
                                <li><a hhref="#">배송지 관리</a></li>
                                <li><a hhref="#">결제수단관리</a></li>
                                <li><a hhref="#">신발사이즈 설정</a></li>
                                <li><a hhref="#">이메일/문자 수신 동의</a></li>
                                <li><a hhref="#">개인정보 제3자 제공 동의</a></li>
                                <li><a hhref="#">제휴멤버십 관리</a></li>
                                <li><a hhref="#">로그인 정보 관리</a></li>
                                <li><a hhref="#">SNS 연결 설정</a></li>
                                <li><a hhref="#">회원 탈퇴</a></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="shippingbox">
                    <div>
                        <h2>주문/배송 조회</h2>
                        <a hhref="#">전체보기 ></a>
                    </div>

                    <div class="shipping">
                        <p>주문접수</p>
                        <p>0</p>
                        <p>결제완료</p>
                        <p>0</p>
                        <p>상품준비중</p>
                        <p>0</p>
                        <p>배송중</p>
                        <p>0</p>
                        <p>배송완료</p>
                        <p>0</p>
                    </div>

                    <div class="cancel">
                        <p>취소</p>
                        <p>0</p>
                        <p>교환</p>
                        <p>0</p>
                        <p>반품</p>
                        <p>0</p>
                        <p>구매확정</p>
                        <p>0</p>
                    </div>

                    <div class="airline_hotel">
                        <p>항공권 예약</p>
                        <p>0</p>
                        <p>호텔 예약</p>
                        <p>0</p>
                    </div>
                </section>

                <section class="myreview_bgbox">
                    <div class="myreview">
                        <h2>마이리뷰<span>1</span></h2>
                        <a hhref="#">전체보기 ></a>
                        <p>남겨주신 리뷰는 다른 고객에게 큰 도움이 됩니다. 리뷰 작성 시, 한달 사용리뷰는 300원, 일반 리뷰는 50원의 쿠팡머니가 적립됩니다.</p>
                        <div class="ctg_view_contbox">
                            <ul>
                                <li class="myreview_cont1">
                                    <p class="cont_title"><a hhref="#"> cj제일제당<br>
                                            스팸 8k호 세트<br>
                                            내 리뷰 보기 ></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="myfavorite">
                        <h2>찜목록<span>99+</span></h2>
                        <a hhref="#">전체보기 ></a>
                        <div class="ctg_view_contbox">
                            <ul>
                                <li class="myfavorite_cont1">
                                    <p class="cont_title"><a hhref="#">블루다이아몬드 아몬드브리즈 언스위트</a></p>
                                    <p class="cont_price">15,200원</p>
                                    <p class="cont_rck_icn">로켓배송</p>
                                    <p class="cont_grade5">별점5점</p>
                                    <p class="cont_cmt">(8,786개)</p>
                                    <p class="cont_shpping">새벽배송가능</p>
                                    <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                </li>

                                <li class="myfavorite_cont2">
                                    <p class="cont_title"><a href="../">웰치<br>
                                            제로 그레이프맛</a></p>
                                    <p class="cont_price"> 14,800원</p>
                                    <p class="cont_rck_icn">로켓배송</p>
                                    <p class="cont_grade5">별점5점</p>
                                    <p class="cont_cmt">(3,251개)</p>
                                    <p class="cont_shpping">새벽배송가능</p>
                                    <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                </li>

                                <li class="myfavorite_cont3">
                                    <p class="cont_title"><a href="../"> 재로우<br>
                                            [쿠팡수입] 재로우 우먼스</a></p>
                                    <p class="cont_price"> 31,000원</p>
                                    <p class="cont_rck_icn">로켓배송</p>
                                    <p class="cont_grade5">별점5점</p>
                                    <p class="cont_cmt">(751개)</p>
                                    <p class="cont_shpping">새벽배송가능</p>
                                    <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="purchased_items">
                        <h2>자주 구매한 상품</h2>
                        <a hhref="#">전체보기 ></a>
                        <div class="ctg_view_contbox">
                            <ul>
                                <li class="purchased_items_cont1">
                                    <p class="cont_title"><a hhref="#"> 대상웰라이프<br>
                                            뉴케어 당플랜 호두맛</a></p>
                                    <p class="cont_price">49,900원</p>
                                    <p class="cont_rck_icn">로켓배송</p>
                                    <p class="cont_grade5">별점5점</p>
                                    <p class="cont_cmt">(12,649개)</p>
                                    <p class="cont_shpping">새벽배송가능</p>
                                    <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                </li>

                                <li class="purchased_items_cont2">
                                    <p class="cont_title"><a href="../"> 광동제약<br>
                                            광동제약 비타500 칼슘</a></p>
                                    <p class="cont_price"> 25,900원</p>
                                    <p class="cont_rck_icn">로켓배송</p>
                                    <p class="cont_grade5">별점5점</p>
                                    <p class="cont_cmt">(2,372개)</p>
                                    <p class="cont_shpping">새벽배송가능</p>
                                    <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
        </main>
        <!-- FOOTER -->
        <?php include "../inc/footer_part.php" ?>
    </div>

</body>

</html>