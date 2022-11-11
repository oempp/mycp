<?php
include "../inc/session.php";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고객센터</title>
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
    <link rel="stylesheet" type="text/css" href="../css/user_service.css?3">
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

    <script type="text/javascript">
        $(document).ready(function() {

            /* 초기설정 */
            var skyColor = "#50a3d9";
            var whiteColor = "#fff";
            var blackColor = "black";
            var transTime = 0.4;

            /* on click [arrow] show answer */
            var upArrowUrl = "url(../images/userservice/up_arrow_28x16.png) no-repeat center";
            var downArrowUrl = "url(../images/userservice/down_arrow_28x16.png) no-repeat center";
            /* original down arrow image */
            const DOWN_ARROW = $(".qnaBoard_bgBox table tr").find("span").css("background");


            $(".qnaBoard_bgBox div").eq(0).show(); //배송문의 노출
            $(".container_01 li").eq(0).css({
                backgroundColor: skyColor,
                color: whiteColor
            }) //배송문의

            // 흔들림효과 스크립트 
            //$("#headset_icon")


            /* top10 hover */
            $(".top10_bgBox td").hover(function() {
                $(this).css({
                    background: skyColor,
                    color: whiteColor
                });
            }, function() {
                $(this).css({
                    background: whiteColor,
                    color: blackColor
                });
            });


            /* on click show slide  */
            /* 1 */
            $(".container_01 li").eq(0).clearQueue().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(0);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list except this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 2 */
            $(".container_01 li").eq(1).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(1);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide(0);
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 3 */
            $(".container_01 li").eq(2).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(2);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 4 */
            $(".container_01 li").eq(3).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(3);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 5 */
            $(".container_01 li").eq(4).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(4);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 6 */
            $(".container_01 li").eq(5).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(5);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 7 */
            $(".container_01 li").eq(6).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(6);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });

            /* 8 */
            $(".container_01 li").eq(7).stop().click(function() {
                $(this).css({
                    backgroundColor: skyColor,
                    color: whiteColor
                });
                $(".container_01 li").not(this).css({
                    backgroundColor: whiteColor,
                    color: blackColor
                })
                var hideList = $(".qnaBoard_bgBox div").eq(7);
                /* show list */
                $(hideList).slideDown(300);
                /* hide list not this */
                $(".qnaBoard_bgBox div").not(hideList).hide();
                /* hide answer */
                $(".hide_tr").hide();
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").css({
                    transition: transTime,
                    background: downArrowUrl
                });
            });


            /* up down arrow setting */

            $(".qnaBoard_bgBox table tr").find("span").stop().click(function() {
                var hideList = $(this).parent().parent().next($(".hide_tr"));
                var presentBgimg = $(this).css("background");
                /* all hide answer */
                $(".hide_tr").not(hideList).hide();
                /* for toggle */
                $(hideList).stop().toggle(400);
                /* all arrow down images */
                $(".qnaBoard_bgBox td span").not(this).css({
                    transition: transTime,
                    background: downArrowUrl
                });

                /*change to upArrow image */
                if (DOWN_ARROW != presentBgimg) {
                    $(this).css({
                        transition: transTime,
                        background: downArrowUrl
                    });
                } else $(this).css({
                    transition: transTime,
                    background: upArrowUrl
                });

                console.log(upArrowUrl);
                console.log("오리지날 : " + DOWN_ARROW);
                console.log("현재 이미지 : " + $(this).css("background"));
            });

        });
    </script>
</head>

<body>
    <div class="wrap">
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../inc/header_part.php" ?>
        <section class="main1st_bgBox">
            <h2>고객센터</h2>
            <form action="" method="get">
                <fieldset>
                    <legend>검색</legend>
                    <label for="find_qtn"></label>
                    <input id="find_qtn" type="text" placeholder="궁금하신 내용을 입력해주세요">
                    <div class="search_iconBox">
                        <span class="moreview_icon"><a href="../"><img src="../images/userservice/moreview_icon_56x56.png" alt=""></a></span>
                        <span class="headset_icon"><a href="../"><img id="headset_icon" src="../images/userservice/headset_icon_64x60.png" alt=""></a></span>
                        <span class="spc_bubble_icon"><a href="../"><img src="../images/userservice/spc_bubble_icon_125x59.png" alt=""></a></span>
                    </div>
                </fieldset>
            </form>
            <div class="container_03">
                <a href="#">반품신청</a><span class="stick"></span>
                <a href="#">배송확인</a></a><span class="stick"></span>
                <a href="#">취소</a></a><span class="stick"></span>
                <a href="#">환불</a></a><span class="stick"></span>
                <a href="#">교환신청</a>
            </div>
            <div class="container_04">
                <a href="../">E-mail 상담</a></a><span class="stick"></span>
                <a href="../">답변확인</a></a><span class="stick"></span>
                <a id="sky_color" href="../">고객센터톡</a>
            </div>
        </section>

        <section class="main2nd_bgBox">
            <h3>자주 찾는 질문 TOP 10</h3>
            <table class="top10_bgBox">
                <tr>
                    <td>
                        <p>1</p>
                        [와우멤버십]<br>
                        와우 멥버십은<br>무엇인가요?
                    </td>
                    <td>
                        <p>2</p>
                        [분쟁처리]<br>
                        분쟁처리절차는<br>
                        어떻게 되나요?
                    </td>
                    <td>
                        <p>3</p>
                        [주문]<br>
                        쿠팡앱과 홈페이지가<br>
                        아닌 판매자가 직업 거래를 요청할 경우 어떻게<br>
                        해야하나요?
                    </td>
                    <td>
                        <p>4</p>
                        [와우멤버십]<br>
                        상품을 주문하지 않았는데,<br>
                        매월 금액이 결제 됩니다.
                    </td>
                    <td>
                        <p>5</p>
                        [외우멤버십]<br>
                        새벽배송 상품이<br>
                        왜 공동현관문<br>
                        앞에 배송되었나요?
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>6</p>
                        [와우멤버십]<br>
                        와우 멤버십 가입을<br>
                        해지하고 싶어요
                    </td>
                    <td>
                        <p>7</p>
                        [정기배송]<br>
                        정기배송은<br>
                        어떤 서비스인가요?
                    </td>
                    <td>
                        <p>8</p>
                        [쿠페이]<br>
                        쿠팡 쿠페이(Coupay)란<br>
                        무엇인가요?
                    </td>
                    <td>
                        <p>9</p>
                        [배송완료미수령]<br>
                        상품을 받지 못했는데<br>
                        배송완료로 확인 됩니다.
                    </td>
                    <td>
                        <p>10</p>
                        [할인쿠폰]<br>
                        할인쿠폰은<br>
                        어디서 확인하나요?
                    </td>
                </tr>
            </table>
        </section>

        <section class="main3rd_bgBox">

            <div>
                <ul class="container_01">
                    <li>배송문의</li>
                    <li>반품/교환/환불</li>
                    <li>정기배송</li>
                    <li>주문/결제</li>
                    <li>로켓모바일</li>
                    <li>쿠팡캐시</li>
                    <li>회원서비스</li>
                    <li>여행티켓</li>
                </ul>
            </div>

            <div class="qnaBoard_bgBox">
                <!-- 배송문의 -->
                <div class="qna_slide01">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓배송] 로켓배송 상품을 19,800원 이하로 구매하고싶어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p> <b>로켓배송 상품의 경우 최소 주문금액이 19,800원 이상 충족 되어야만 구매가 가능합니다.</b><br>
                                    ※ 로켓배송 상품은 쿠팡에서 직접 판매하며 쿠팡의 자체 배송 서비스를 이용합니다. 19,800원 이하 구매 시 배송비를 추가 결제하더라도 구매가
                                    불가능한 점 양해 부탁드립니다.<br>
                                    ※ 와우 멤버십에 가입하시면, 최소 주문금액 기준에 충족하지 않더라도 구매 가능하며, 주문 금액 관계 없이 무조건 무료 배송됩니다</p>
                            </td>
                        </tr>
                        <tr>
                            <th>Q.</th>
                            <td>[배송완료미수령] 상품을 받지 못했는데 배송완료로 확인됩니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p> 만약 '배송완료'로 확인되나 상품을 받지 못했다면 다음을 먼저 확인해주십시오.<br>
                                    <br>
                                    <b>로켓 배송 상품인 경우 :</b><br>
                                    • 배송완료 문자 또는<br>
                                    <a href="../">마이쿠팡 > 주문 목록 ></a>상품 선택 > [배송조회] 버튼 클릭 > 사진 또는<br>
                                    • 대리 수령 가능 장소(경비실, 이웃, 주변 편의점 등) 확인<br>
                                    <br>
                                    <b>판매자 배송 상품인 경우</b><br>
                                    • 배송완료 문자 또는 대리 수령 가능 장소(경비실, 이웃, 주변 편의점 등) 확인<br>
                                    <br>
                                    <b>배송된 상품을 찾을 수 없다면 아래 안내에 따라 진행 바랍니다.</b>
                                    <b>로켓배송 상품을 받지 못한 경우</b><br>
                                    <a href="../">마이쿠팡 > 주문 목록 ></a>상품 선택 > [교환,반품 신청] 버튼 클릭<br>
                                    <br>
                                    <b>판매자 배송 상품을 받지 못한 경우</b><br>
                                    <a href="../">마이쿠팡 > 주문 목록 ></a>상품 선택 > [택배 배송기사에게 전화하기]버튼 클릭하여 문의<br>
                                    <br>
                                    <b>선물 상품을 받지 못한 경우</b><br>
                                    • 받는 사람에게 발송된 문자 또는 카카오톡 메시지 내 [배송조회] 링크 접속하여 관련 정보 재확인<br>
                                    • 페이지 하단 [문의하기]를 통해 고객센터 문의<br>
                                </p>

                            </td>
                        </tr>
                        <tr>
                            <th>Q.</th>
                            <td>[상품누락] 상품을 구매했는데 일부만 배송되었어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>상품이 누락 되었다면 교환을 통해 상품을 다시 받거나, 반품하고 환불받을 수 있습니다. <br>
                                    <br>
                                    <b>[로켓배송] 상품 수량이 누락되어 배송된 경우</b><br>

                                    • 구매한 상품 중 일부 수량이 누락되어 배송되었다면, 반품으로 진행해주셔야 합니다. <br>


                                    <a href="../">마이쿠팡 > 주문 목록 ></a> [교환, 반품 신청] 버튼 클릭 > 반품 신청하기<br>

                                    <br>

                                    <b>[로켓배송] 상품 구성품 중 일부가 누락되어 배송된 경우</b><br>

                                    • 구성품 일부에 대해서만 부분배송이 불가하여, 상품 전체 교환으로 진행해주셔야 합니다.<br>

                                    <a href="../">마이쿠팡 > 주문 목록 ></a> 상품선택 > [교환신청] 버튼 클릭<br>

                                    <br>

                                    <b>[판매자배송] 상품이 누락되어 배송되었을 경우</b><br>

                                    •판매자에게 직접 문의해주시기 바랍니다. <br>

                                    <br>

                                    <b>판매자 정보 확인하기</b><br>

                                    <a href="../">마이쿠팡 > 주문 목록 ></a> ['판매자명'에 문의하기] 버튼 클릭<br>

                                    • 상품 상세 페이지 > 배송/교환/반품 안내 > 판매자 정보란 에서 판매자 연락처 확인
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[배송일정] 주문한 상품의 배송상태가 계속 상품준비중으로 표시됩니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    '상품준비중' 단계는 판매자가 고객님의 주문을 확인하여 상품의 포장, 배송을 준비하는 상태입니다.<br>

                                    갑작스러운 주문량 증가 등 예상치 못한 상황이 발생할 경우 '상품준비중' 단계가 길어질 수 있습니다.<br>

                                    또한, 해외배송상품의 경우 시차로 인해 주문확인 및 상품포장에 시간이 소요될 수 있으니 참고 부탁드립니다.<br>

                                    <br>

                                    <b>'상품 준비중' 단계가 길어져 취소를 원할 경우</b><br>

                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> > 상품 선택 > 주문취소<br>

                                    • 상품 수령을 원하신다면 판매자에게 배송일정 문의 부탁드립니다.<br>

                                    <br>

                                    <b>판매자에게 문의하기</b><br>

                                    ※ 로켓 배송, 로켓 프레시, 로켓 모바일, 로켓 직구 상품은 쿠팡 고객센터(1577-7011)로 문의바랍니다.<br>

                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> > 상품 선택 > ['판매자명'에 문의하기] 버튼 클릭<br>

                                    • 상품 상세 페이지 > 배송/교환/반품 안내 > 판매자 정보란 에서 판매자 연락처 확인<br>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[상품파손] 배송 받은 상품이 파손되었을 경우 어떻게 해야 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>상품이 파손되어 배송된 경우 교환 및 반품을 신청하실 수 있으며, 사용 흔적이 없는 상품만 교환, 반품이 가능합니다.<br>

                                    단, 교환의 경우 구매상품과 동일한 상품만 교환이 가능합니다. 색상 및 사이즈 변경이 불가할 경우 반품접수 후 재구매 부탁드립니다.<br>

                                    상품에 따라 교환/반품 조건이 다르므로, 정확한 내용은 구매한 상품의 상세페이지 내 배송/교환/반품 안내를 참고 바랍니다.<br>

                                    <br>

                                    <b>교환・반품 가능 기간</b><br>

                                    • 표시, 광고 상이, 물품하자(초기불량)의 경우<br>

                                    • 물품을 수령한 날부터 3개월 이내 또는 그 사실을 알거나 알 수 있었던 날부터 30일 이내<br>

                                    <br>

                                    교환/반품이 제한되는 경우<br>

                                    <b>1. 공통</b><br>

                                    • 주문/제작 상품의 경우, 상품의 제작이 이미 진행된 경우<br>

                                    • 고객의 사용, 시간경과, 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우<br>

                                    • 세트상품 일부 사용, 구성품을 분실하였거나 취급 부주의로 인한 파손/고장/오염으로 재판매 불가한 경우<br>

                                    • 모니터 해상도의 차이로 인해 색상이나 이미지가 실제와 달라, 고객이 단순 변심으로 교환/반품을 무료로 요청하는 경우<br>

                                    • 제조사의 사정 (신모델 출시 등) 및 부품 가격 변동 등에 의해 무료 교환/반품으로 요청하는 경우<br>

                                    <b>2. 의류/잡화/수입명품/계절상품/식품/화장품</b><br>

                                    • 상품의 택(TAG) 제거, 라벨 및 상품 훼손, 구성품 누락으로 상품의 가치가 현저히 감소된 경우<br>

                                    • 신선/냉장/냉동 식품의 단순변심의 경우<br>

                                    • 뷰티 상품 이용 시 트러블(알러지, 붉은 반점, 가려움, 따가움)이 발생하는 경우, 진료 확인서 및 소견서 등을 증빙하면 환불이 가능(제반비용
                                    고객부담)<br>

                                    <b>3. 전자/가전/설치상품</b><br>

                                    • 전자제품의 특성 상 본품 박스를 개봉한 경우<br>

                                    • 설치 또는 사용하여 재판매가 어려운 경우, 액정이 있는 상품의 전원을 켠 경우<br>

                                    • 상품의 시리얼 넘버 유출로 내장된 소프트웨어의 가치가 감소한 경우 (내비게이션, OS시리얼이 적힌 PMP)<br>

                                    • 홀로그램 등을 분리, 분실, 훼손하여 상품의 가치가 현저히 감소하여 재판매가 불가할 경우 (노트북, 데스크탑 PC 등)<br>

                                    <br>

                                    <b>반품하기</b><br>

                                    · <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [교환, 반품 신청] 버튼 클릭 > 반품 신청하기<br>

                                    · 반품 상품이 쿠팡(판매자)에게 도착한 후 결제 승인이 취소됩니다.<br>

                                    · 반품접수 화면에서 반품비를 제외한 환불 예정금액 확인이 가능합니다.<br>

                                    <br>

                                    <b>교환하기</b><br>

                                    · <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [교환,반품 신청] 버튼 클릭<br>

                                    <br>

                                    <b>교환・반품 시 참고사항</b><br>

                                    · 판매자 배송 상품 : 회수 상품이 판매자에게 도착한 후, 교환 받을 상품이 발송됩니다.<br>

                                    · 로켓 배송 상품 : 교환을 신청한 상품이 회수되기 이전에, 교환 받을 상품이 먼저 배송될 수 있습니다. 회수 상품은 회수지에 놓아주세요.<br>

                                    · 선물 받은 상품 : 교환/반품 신청은 쿠팡 고객센터(1577-7011)로 문의바랍니다.<br>

                                    · 교환 접수 시 교환상품의 배송지 정보와 회수지 정보를 각기 다른 주소지로 설정이 가능합니다.<br>

                                    · 교환접수에서 교환상품의 배송까지는 최대 7일이 소요됩니다.<br>

                                    ※ 상품문제로 인한 교환이 아닌 경우 교환비용이 발생하며 고객님이 부담하게 됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[배송일정] 주문한 상품은 언제 배송되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>결제하신 상품은 안내된 배송예정일까지 배송됩니다.<br>
                                    배송예정일은 판매자 및 배송지에 따라 차이가 있을 수 있으며, 도서산간 지역 등은 배송에 3-5일이 더 소요될 수 있습니다.<br>
                                    천재지변, 물량 수급 변동 등 예외적인 사유 발생 시, 다소 지연될 수 있는 점 양해 부탁드립니다.<br>
                                    <br>
                                    <b>배송예정일 확인하기</b><br>
                                    <a href="../">마이쿠팡 > 주문 목록 ></a> 상품선택 > 배송조회
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[배송일정] 배송중인 상품의 위치를 알고 싶어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    마이 쿠팡에서 쉽고 빠르게 배송 현황 확인이 가능합니다.<br>

                                    배송예정일, 배송시작 메세지는 쿠팡 앱 알림센터에서 확인하실 수 있습니다.<br>

                                    <br>

                                    <b>배송현황 확인하기</b><br>

                                    <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > 배송조회
                                </p>
                            </td>
                        <tr>
                        <tr>
                            <th>Q.</th>
                            <td>[배송지] 주문 후 결제까지 완료했는데 배송지를 변경하고 싶어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    결제완료, 상품 준비 중인 경우 배송지 변경이 가능합니다.<br>

                                    단, 한 개의 주문번호에 하나의 배송지만 설정할 수 있습니다.<br>

                                    <br>

                                    <b>상품 유형과 배송 단계에 따른 배송지 변경 가능 여부</b><br>

                                    • 로켓 배송 : 결제완료, 상품준비중 단계에서는 배송지 변경 가능합니다.<br>

                                    • 로켓 프레시 : 결제완료 단계에서만 배송지 변경이 가능합니다.<br>

                                    • 판매자 배송 : 결제완료 단계에서만 배송지 변경이 가능합니다.<br>

                                    - 일부 판매자의 경우 예외적으로 가능한 경우가 있으니 판매자에게 직접 문의바랍니다.<br>

                                    <br>

                                    <b>배송지 변경하기</b><br>

                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> 주문상세보기 > 배송지 [변경하기] 클릭<br>

                                    ※ 이미 배송이 시작된 경우, 배송지 변경이 불가합니다<br>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[배송일정] 운송장번호로 배송조회를 했는데 배송정보가 없다고 나와요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>배송 정보가 없는 경우, 주문 당일 상품을 발송하여 시스템에 운송장 번호가 등록되지 않은 상황입니다.<br>

                                    다음 날부터 배송조회가 가능합니다.

                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[배송일정] 휴일에 상품을 받을 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    상품 유형과 택배사에 따라 휴일(일요일, 공휴일) 배송 가능 여부가 다릅니다.<br>

                                    또한, 명절기간에는 운영방침이 다를 수 있으니 정확한 내용은 택배사 연락처로 문의 해 주시기 바랍니다.<br>

                                    <br>

                                    <b>상품 유형별 휴일 배송 안내</b><br>

                                    ○ 로켓배송 상품 :<br>

                                    - 쿠팡친구(쿠친) 배송 : 휴일(일요일, 공휴일) 상품 배송<br>

                                    - 협력택배사, 일반 택배사 배송 : 휴일(일요일, 공휴일) 상품 배송 불가<br>

                                    ○ 판매자 배송 상품 : 휴일(일요일, 공휴일) 상품 배송 불가<br>

                                    <br>

                                    <b>택배사 확인하기</b><br>

                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [배송조회] 버튼 클릭
                                    <br>
                                    ※ 판매자배송 상품의 배송/회수일정 확인은 판매자 또는 택배사 고객센터로 문의 바랍니다
                                    <br>
                                    ※ 판매자와 계약된 택배사가 아닌 다른 택배사를 통해 상품을 반송할 경우, 반품비용이 추가로 부과될 수 있습니다.
                                    <br>
                                    <br>
                                    <b>■ 택배사 연락처</b>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[배송일정] 주문한 상품의 배송조회가 안됩니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    대형가전 또는 가구의 경우 판매자가 직접 배송할 수 있습니다.
                                    <br>
                                    판매자가 직접 배송하여 일반 택배사를 이용하지 않을 경우, 배송조회가 불가합니다.
                                    <br>
                                    정확한 배송일정 및 현황은 판매자에게 문의 바랍니다.
                                    <br>
                                    <br>

                                    <b>판매자에게 문의하기</b>
                                    <br>
                                    <a href="../">마이쿠팡 > 주문 목록 ></a> ['판매자명'에 문의하기] 버튼 클릭
                                    <br>
                                    • 상품 상세 페이지 > 배송/교환/반품 안내 > 판매자 정보란 에서 판매자 연락처 확인
                                </p>
                            </td>
                    </table>
                </div>

                <!-- 반품 교환 환불 -->
                <div class="qna_slide02">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[반품] 배송받은 상품을 반품하고 싶어요. 어떻게 하면 되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    사용 흔적이 없는 상품만 교환, 반품이 가능합니다.
                                    <br>
                                    회수한 상품을 검수한 후 문제가 발견되면 고객님께 연락을 드립니다.
                                    <br>
                                    <br>

                                    <b>반품하기</b>
                                    <br>
                                    · <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [교환, 반품 신청] 버튼 클릭
                                    <br>
                                    · 반품 상품이 쿠팡(판매자)에게 도착한 후 결제 승인이 취소됩니다.
                                    <br>
                                    · 반품접수 화면에서 반품비를 제외한 환불 예정금액 확인이 가능합니다.
                                    <br>
                                    <br>

                                    <b>교환・반품 가능 기간</b>
                                    <br>
                                    ○ 구매자 단순 변심의 경우
                                    <br>
                                    • 로켓 배송 상품 : 배송 완료일로부터 30일 이내
                                    <br>
                                    • 로켓 프레시 상품 : 단순 변심으로 인한 반품 불가
                                    <br>
                                    • 로켓 직구 상품 : 배송 완료일로부터 7일 이내
                                    <br>
                                    • 로켓 모바일 상품 : 주문일 포함 14일 이내
                                    <br>
                                    • 판매자 배송 상품 : 배송 완료일로부터 7일 이내
                                    <br>
                                    <br>

                                    <b>○ 표시, 광고 상이, 물품하자(초기불량)의 경우</b>
                                    <br>
                                    • 물품을 수령한 날부터 3개월 이내 또는 그 사실을 알거나 알 수 있었던 날부터 30일 이내
                                    <br>
                                    <br>

                                    <b>○ 파손/불량/오배송 등(판매자 귀책)의 경우</b>
                                    <br>
                                    • 물품을 수령한 날부터 3개월 이내 또는 그 사실을 알거나 알 수 있었던 날부터 30일 이내


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[교환] 상품 교환하고 싶어요. 어떻게 하면 되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>사용 흔적이 없는 상품만 교환, 반품이 가능합니다. 회수한 상품을 검수한 후 문제가 발견되면 고객님께 연락을 드립니다.
                                    <br>
                                    상품 교환은 구매상품과 동일한 상품으로만 교환 가능합니다. 색상 및 사이즈 변경을 원하신다면, 반품 접수 후 재구매를 진행해주세요.
                                    <br>
                                    ※ 교환접수 후 1~3일 내로 택배 기사 또는 쿠팡친구(쿠친)가 방문하여 상품을 회수합니다.
                                    <br>
                                    ※ 교환접수 후 교환상품 배송까지 최대 7일이 소요됩니다.
                                    <br>
                                    ※ 상품문제(오배송,물품하자 등)로 인한 교환이 아닌 경우 교환비용이 발생하며 고객 부담입니다.
                                    <br>
                                    <br>

                                    <b>교환하기</b>
                                    <br>
                                    · <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [교환,반품 신청] 버튼 클릭
                                    <br>
                                    ○ 참고사항
                                    <br>
                                    · 판매자 배송 상품 : 회수 상품이 판매자에게 도착한 후, 교환 받을 상품이 발송됩니다.
                                    <br>
                                    · 로켓 배송 상품 : 교환을 신청한 상품이 회수되기 이전에, 교환 받을 상품이 먼저 배송될 수 있습니다. 회수 상품은 회수지에 놓아주세요.
                                    <br>
                                    · 선물 받은 상품 : 교환/반품 신청은 쿠팡 고객센터(1577-7011)로 문의바랍니다.
                                    <br>
                                    · 교환 접수 시 교환상품의 배송지 정보와 회수지 정보를 각기 다른 주소지로 설정이 가능합니다.
                                    <br>
                                    <br>

                                    <b>교환・반품 가능 기간</b>
                                    <br>
                                    ○ 구매자 단순 변심의 경우
                                    <br>
                                    • 로켓 배송 상품 : 배송 완료 후 30일 이내
                                    <br>
                                    • 로켓 프레시 상품 : 단순 변심으로 인한 반품 불가
                                    <br>
                                    • 로켓 모바일 상품 : 주문일 포함 14일 이내
                                    <br>
                                    • 판매자 배송 상품 : 배송 완료 후 7일 이내
                                    <br>
                                    ○ 표시, 광고 상이, 물품하자(초기불량)의 경우
                                    <br>
                                    • 물품을 수령한 날부터 3개월 이내 또는 그 사실을 알거나 알 수 있었던 날부터 30일 이내
                                    <br>
                                    <br>

                                    <b>판매자 정보 확인하기</b>
                                    <br>
                                    ※ 로켓 배송, 로켓 프레시, 로켓 모바일 상품은 쿠팡 고객센터(1577-7011)로 문의바랍니다.
                                    <br>
                                    · > 상품 선택 > ['판매자명'에 문의하기] 버튼 클릭
                                    <br>
                                    · 상품 상세 페이지 > 배송/교환/반품 안내 > 판매자 정보란 에서 판매자 연락처 확인
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[반품] 상품의 포장을 훼손했는데 반품할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    사용 흔적이 없는 상품만 교환, 반품이 가능합니다. 회수한 상품을 검수한 후 문제가 발견되면 고객님께 연락을 드립니다.
                                    <br>
                                    일부 상품에 한하여 상품의 내용물을 확인하기 위해 포장을 개봉한 경우에만 반품이 가능합니다.
                                    <br>
                                    단, 상품 포장도 상품의 가치 중 하나로 인정받는 상품일 때는 해당되지 않습니다. 이 경우 상품 포장을 훼손하면 구매자의 단순변심에 의한 반품이
                                    가능하지 않습니다.
                                    <br>
                                    반품 상세 조건은 상품 페이지를 확인해 주십시오.
                                    <br>
                                    <br>

                                    <b>교환/반품 제한사항</b>
                                    <br>
                                    <b>공통</b>
                                    <br>
                                    • 주문/제작 상품으로, 상품의 제작이 이미 진행된 경우
                                    <br>
                                    • 고객의 사용, 시간경과, 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우
                                    <br>
                                    • 세트상품 일부 사용, 구성품을 분실하였거나 취급 부주의로 인한 파손/고장/오염으로 재판매 불가한 경우
                                    <br>
                                    • 모니터 해상도의 차이로 인해 색상이나 이미지가 실제와 달라, 고객이 단순 변심으로 교환/반품을 무료로 요청하는 경우
                                    <br>
                                    • 제조사의 사정 (신모델 출시 등) 및 부품 가격 변동 등에 의해 무료 교환/반품으로 요청하는 경우
                                    <br>
                                    <br>

                                    <b>의류/잡화/수입명품/계절상품/식품/화장품</b>
                                    <br>
                                    • 상품의 택(TAG) 제거, 라벨 및 상품 훼손, 구성품 누락으로 상품의 가치가 현저히 감소된 경우
                                    <br>
                                    • 신선냉동 식품의 단순변심의 경우
                                    <br>
                                    • 뷰티 상품 이용 시 트러블(알러지, 붉은 반점, 가려움, 따가움)이 발생하는 경우, 진료 확인서 및 소견서 등을 증빙하면 환불이 가능(제반비용
                                    고객부담)
                                    <br>
                                    <br>

                                    <b>전자/가전/설치상품</b>
                                    <br>
                                    • 전자제품의 특성 상 본품 박스를 개봉한 경우
                                    <br>
                                    • 설치 또는 사용하여 재판매가 어려운 경우, 액정이 있는 상품의 전원을 켠 경우
                                    <br>
                                    • 상품의 시리얼 넘버 유출로 내장된 소프트웨어의 가치가 감소한 경우 (내비게이션, OS시리얼이 적힌 PMP)
                                    <br>
                                    • 홀로그램 등을 분리, 분실, 훼손하여 상품의 가치가 현저히 감소하여 재판매가 불가할 경우 (노트북, 데스크탑 PC 등)
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[반품] 반품 신청을 취소(철회)하고 싶어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>반품할 상품이 아직 수거되지 않았거나 발송하지 않은 경우, 마이 쿠팡에서 반품 취소(철회) 가능합니다.
                                    <br>
                                    <br>

                                    <b>반품 철회하기</b><br>
                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [반품취소] 버튼 클릭
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[반품] 마이쿠팡에서 반품접수가 안돼요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    주문 제작, 설치 배송 상품, 신선/냉장/냉동, 순금 등의 상품은 출고된 이후 또는 반품 가능 기한이 경과한 경우에는 마이 쿠팡에서 교환/반품이
                                    가능하지 않습니다. 자세한 내용은 상세페이지 내 배송/교환/반품 안내를 참고해주십시오.
                                    <br>
                                    상품에 문제가 있거나 제공한 내용과 다른 경우는 판매자에게 문의 부탁드립니다.
                                    <br>
                                    <br>

                                    <b>교환・반품 가능 기간</b>
                                    <br>
                                    ○ 구매자 단순 변심의 경우
                                    <br>
                                    • 로켓 배송 상품 : 배송 완료일로부터 30일 이내
                                    <br>
                                    • 로켓 프레시 상품 : 단순 변심으로 인한 반품 불가
                                    <br>
                                    • 로켓 직구 상품 : 단순 변심으로 인한 교환 불가, 배송 완료일로부터 7일 이내 반품만 가능
                                    <br>
                                    • 로켓 모바일 상품 : 주문일 포함 14일 이내
                                    <br>
                                    • 판매자 배송 상품 : 배송 완료일로부터 7일 이내
                                    <br>
                                    <br>

                                    <b>○ 표시, 광고 상이, 물품하자(초기불량)의 경우</b>
                                    <br>
                                    • 물품을 수령한 날부터 3개월 이내 또는 그 사실을 알거나 알 수 있었던 날부터 30일 이내.
                                    <br>
                                    <br>

                                    <b>○ 파손/불량/오배송 등(판매자 귀책)의 경우</b>
                                    <br>
                                    • 배송 완료일로부터 3개월 이내
                                    <br>
                                    <br>

                                    <b>판매자 정보 확인 방법</b>
                                    <br>
                                    ※ 로켓 배송, 로켓 프레시, 로켓 모바일, 로켓 직구 상품은 쿠팡 고객센터(1577-7011)로 문의바랍니다.
                                    <br>
                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> ['판매자명'에 문의하기] 버튼 클릭
                                    <br>
                                    • 상품 상세 페이지 > 배송/교환/반품 안내 > 판매자 정보란 에서 판매자 연락처 확인
                                    <br>
                                    <br>

                                    <b>쿠팡 고객센터 문의하기</b>
                                    <br>
                                    • 쿠팡 고객센터(☎1577-7011)
                                    <br>
                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> [상담하기] 버튼 클릭 > [1:1 채팅 상담]버튼 클릭
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[반품/교환] 교환,반품이 가능한 기준은 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    상품 불량/파손/오배송 등 쿠팡의 귀책인 경우에는 반품/교환 비용이 발생하지 않습니다.
                                    <br>
                                    구매자의 단순 변심인 경우에는 아래와 같이 반품/교환 비용이 발생합니다.
                                    <br>
                                    <br>

                                    <b>[교환 비용]</b>
                                    <br>
                                    <b>로켓배송</b>
                                    <br>
                                    • 와우 멤버십 회원 : 무료
                                    <br>
                                    • 와우 멤버십 비회원 : 단순 변심일 경우, 교환 배송비 쿠팡 계좌로 입금 필요
                                    <br>
                                    <b>판매자 배송</b>
                                    <br>
                                    • 단순 변심일 경우, 반품 후 재구매
                                    <br>
                                    <b></b>
                                    <br>
                                    • 단순 변심으로 인한 교환 불가
                                    <br>
                                    <br>

                                    <b>[반품 비용]</b>
                                    <br>
                                    <b>로켓배송</b>
                                    <br>
                                    • 와우 멤버십 회원 : 무료
                                    <br>
                                    • 와우 멤버십 비회원 :
                                    <br>
                                    • 총 주문금액 - 반품 상품 금액 = 19,800원 미만인 경우 : 반품비 5,000원 차감 후 환불
                                    <br>
                                    • 총 주문금액 - 반품 상품 금액 = 19,800원 이상인 경우 : 반품비 2,500원 차감 후 환불
                                    <br>
                                    <b>로켓 직구</b>
                                    <br>
                                    • 반품비 5,000원 차감 후 환불
                                    <br>
                                    <b>판매자 배송</b>
                                    <br>
                                    <b>• 반품비 차감 후 환불</b>
                                    <br>
                                    • 상품 상세페이지 > 배송/교환/반품 안내 > 교환/반품 비용 확인
                                    <br>
                                    • 최소 배송비를 포함한 왕복 배송비가 부과됩니다
                                    <br>
                                    • 도서/산간 지역이거나 설치된 상품을 반품하는 경우 추가 반품비가 발생할 수 있습니다
                                    <br>
                                    ※ 해외 배송 상품, 가구 및 설치 상품의 경우 상품 상세 페이지를 확인해주세요.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[교환] 교환접수 후 회수와 새상품 배송은 어떻게 진행되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    구매한 상품에 따른 회수방법 안내드립니다.
                                    <br>
                                    <br>

                                    <b>로켓배송 상품</b>
                                    <br>
                                    <b>○ 쿠팡 친구(쿠친) 배송지역:</b>
                                    <br>
                                    • 회수 상품 : 교환 접수일로부터 평일(영업일) 기준 1일 이내 택배기사 방문 예정
                                    <br>
                                    • 새 상품 배송 : 교환 접수일로부터 평일(영업일) 기준 1일 이내
                                    <br><br>

                                    <b>○ 협력택배사 배송지역:</b>
                                    <br>
                                    • 회수 상품 : 교환 접수일로부터 평일(영업일) 기준 1~3일 이내 택배기사 방문 예정
                                    <br>
                                    • 새 상품 배송 : 교환 접수일로부터 평일(영업일) 기준 1~2일 이내 판매자배송 상품
                                    <br>
                                    • 회수 상품 : 교환 접수일로부터 평일(영업일) 기준 1~3일 이내 택배기사 방문 예정
                                    <br>
                                    • 새 상품 배송 : 교환 접수일로부터 평일(영업일)기준 5~7일 이내
                                    <br>
                                    ※ 판매자와 계약된 택배사 외 다른 택배사를 통해 상품을 반송할 경우 추가 교환비용이 부과될 수 있습니다
                                    <br>
                                    <br>

                                    <b>로켓직구 상품</b>
                                    <br>
                                    • 회수 상품 : 교환 접수일로부터 평일(영업일) 기준 1~3일 이내 택배기사 방문 예정
                                    <br>
                                    • 새 상품 배송 :
                                    <br>
                                    - 로켓직구 일반: 교환 접수일로부터 평일(영업일) 기준 3~5일 이내
                                    <br>
                                    - 로켓직구 도서: 교환 접수일로부터 평일(영업일) 기준 1~7일 이내
                                    <br>
                                    - 로켓직구 압타밀: 교환 접수일로부터 수령까지 평일(영업일) 기준 3~5일 이내
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[교환] 주문하지 않은 다른 상품을 받거나, 불량이 있어 교환하고 싶습니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>상품의 문제(오배송,물품하자 등)로 인한 경우 무료 교환 가능합니다.
                                    <br>
                                    상품 교환은 구매상품과 동일한 상품으로만 교환 가능합니다.
                                    <br>
                                    색상 및 사이즈 변경을 원하신다면, 반품 접수 후 재구매를 진행해주세요.
                                    <br>
                                    ※ 교환접수 후 1~3일 내로 택배 기사 또는 쿠팡친구(쿠친)가 방문하여 상품을 회수합니다.
                                    <br>
                                    ※ 교환접수 후 교환상품 배송까지 최대 7일이 소요됩니다.
                                    <br>
                                    <br>

                                    <b>교환하기</b>
                                    <br>
                                    · <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [교환,반품 신청] 버튼 클릭
                                    <br>
                                    ○ 참고사항
                                    <br>
                                    · 판매자 배송 상품 : 회수 상품이 판매자에게 도착한 후, 교환 받을 상품이 발송됩니다.
                                    <br>
                                    · 로켓 배송 상품 : 교환을 신청한 상품이 회수되기 이전에, 교환 받을 상품이 먼저 배송될 수 있습니다. 회수 상품은 회수지에 놓아주세요.
                                    <br>
                                    · 선물 받은 상품 : 교환/반품 신청은 쿠팡 고객센터(1577-7011)로 문의바랍니다.
                                    <br>
                                    · 교환 접수 시 교환상품의 배송지 정보와 회수지 정보를 각기 다른 주소지로 설정이 가능합니다.
                                    <br>
                                    <br>

                                    <b>교환・반품 가능 기간</b>
                                    <br>
                                    ○ 구매자 단순 변심의 경우
                                    <br>
                                    • 로켓 배송 상품 : 배송 완료일로부터 30일 이내
                                    <br>
                                    • 로켓 프레시 상품 : 단순 변심으로 인한 반품 불가
                                    <br>
                                    • 로켓 모바일 상품 : 주문일 포함 14일 이내
                                    <br>
                                    • 로켓 직구 상품 : 배송 완료일로부터 7일 이내
                                    <br>
                                    • 판매자 배송 상품 : 배송 완료일로부터 이내
                                    <br>
                                    ○ 표시, 광고 상이, 물품하자(초기불량)의 경우
                                    <br>
                                    • 물품을 수령한 날부터 3개월 이내 또는 그 사실을 알거나 알 수 있었던 날부터 30일 이내
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[환불] 상품을 반품신청하였는데, 언제 환불되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>반품 후 환불까지의 소요시간은 판매자와 결제수단에 따라 다릅니다.
                                    <br>
                                    반품 상품이 쿠팡 또는 판매자에게 도착한 후, 이상이 없다면 구매내역을 즉시 취소하여 문자로 안내합니다.
                                    <br>
                                    환불일정은 결제수단별로 다르니 아래 내용 참고 바랍니다.
                                    <br>
                                    <br>

                                    <b>결제수단 별 환불일정</b>
                                    <br>
                                    • 쿠페이 머니: 당일 환불 (카카오뱅크 계좌이체는 환불 요청일로부터 3일 이내 환불)
                                    <br>
                                    • 신용/체크카드: 평일(영업일) 기준 3~7일 이내 카드사 승인취소
                                    <br>
                                    • 휴대폰결제 : 평일(영업일) 기준 2일 이내 결제 한도 복구
                                    <br>
                                    ※ 결제월과 취소월이 다르거나, 휴대폰 해약 등으로 승인취소가 불가피한 경우 등록된 환불계좌로 환불
                                    <br>
                                    ※ 쿠페이 회원은 환불계좌 미등록시 쿠페이 머니로 환불되며 결제금액은 휴대폰 요금에 청구
                                    <br>
                                    • 무통장입금 : 등록된 환불계좌로 평일(영업일) 기준 1~2일 이내 환불
                                    <br>
                                    ※ 본인이 예금주인 계좌만 등록 가능합니다.
                                    <br>
                                    ※ 쿠페이 회원은 환불계좌 미등록시 쿠페이 머니로 환불
                                    <br>
                                    • 쿠팡캐시 : 환불요청완료일에 즉시 적립
                                    <br>
                                    • 계좌이체 : 환불요청완료일에 결제한 은행계좌로 환불
                                    <br>
                                    • 나중결제 :
                                    <br>
                                    - 결제일 이전 : 환불요청완료일에 당일 이용가능 금액 복구
                                    <br>
                                    - 결제일 이후 : 환불요청완료일로부터 1~2일 이내
                                    <br>
                                    <br>

                                    환불계좌 등록하기
                                    <br>
                                    • <a href="../">마이쿠팡 > 취소/반품 > 교환목록 > 무통장환불 랩 ></a> [계좌 등록하기] 클릭
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[취소] 무통장입금 결제 후 주문금액을 입금했는데, 주문이 취소되었습니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    주문 금액을 입금했더라도 상품이 품절되는 경우, 주문이 취소됩니다.
                                    <br>
                                    입금하신 금액은 아래 환불 일정에 따라 환불됩니다.
                                    <br>
                                    <br>

                                    <b>결제 수단별 환불 일정</b>
                                    <br>
                                    • 신용/체크카드 : 영업일(평일) 기준 3~7일 이내 카드사 승인 취소
                                    <br>
                                    • 무통장입금 : 영업일(평일) 기준 2~3일 이내 등록된 환불계좌로 환불
                                    <br>
                                    ※ 쿠페이 회원은 환불계좌 미등록 시 쿠페이 머니로 환불
                                    <br>
                                    • 휴대폰결제 : 취소 완료 후 당일 한도 복구
                                    <br>
                                    ※ 부분 취소 시 취소 외 금액 결제 → 최초 결제금액 한도복구
                                    <br>
                                    ※ 익월 환불 및 한도복구 불가 시에는 등록된 환불계좌로 환불
                                    <br>
                                    ※ 쿠페이 회원은 환불계좌 미등록 시 쿠페이 머니로 환불
                                    <br>
                                    • 쿠페이머니 : 당일 환불 (카카오뱅크 계좌이체는 환불 요청일로부터 3일 이내 환불)
                                    <br>
                                    • 쿠팡캐시 : 취소 완료 후, 당일 캐시 적립
                                    <br>
                                    <br>

                                    <b>환불계좌 등록하기</b>
                                    <br>
                                    <b>APP</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 취소・반품・교환목록 > 무통장 환불 탭</a> > [계좌 변경하기] 버튼 클릭
                                    <br>
                                    <b>WEB</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 취소・반품・교환목록 > 무통장 환불 탭</a> > [계좌 변경하기] 버튼 클릭
                                    <br>
                                    <br>

                                    <b>쿠페이 머니 인출하기</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 결제수단・쿠페이 > 쿠페이 머니</a> > [인출] 버튼 클릭
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[취소] 취소한 경우 취소내역 및 취소전표는 어디서 확인 하나요 ?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    <b>취소내역 확인하기</b>
                                    <br>
                                    • 마이쿠팡 > 취소・반품・교환목록 >취소・반품・교환 탭 에서 취소 및 반품 진행상태 확인 가능합니다.
                                    <br>
                                    ○ 참고사항
                                    <br>
                                    • 취소접수 : 주문 취소 접수가 완료된 상태<br>
                                    • 환불진행중 : 취소/반품 요청에 따라 주문이 취소되어 주문 취소가 진행중인 상태<br>
                                    • 취소완료 : 주문 취소가 완료된 상태 (결제수단에 따른 환불기간이 소요)<br>
                                    <br>
                                    <b>취소전표 확인하기</b><br>
                                    <b>Web</b><br>
                                    • <a href="../">마이쿠팡 > 취소/반품/교환/환불내역 > 취소/반품/교환/환불 탭 > 상품 선택</a> > [취소 상세] 버튼 클릭 > [취소
                                    영수증 확인] 버튼
                                    클릭<br>
                                    • 쿠팡 Web을 통해서만 확인이 가능하며 App, 모바일Web에서는 확인이 가능하지 않습니다.
                                </p>
                            </td>
                    </table>
                </div>

                <!-- 3 -->
                <div class="qna_slide03">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송 상품별로 배송지를 다르게 설정할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    정기배송은 상품별로 각기 다른 배송지 설정이 가능합니다.
                                    <br>
                                    ※ 주소지 변경 시 도착예정일이 변동될 수 있습니다.
                                    <br>
                                    <br>

                                    정기배송 상품 배송지 변경하기
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 정기배송 > 상품 '상세변경' 클릭 > 배송주소 변경
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 정기배송 > 상품 '상세변경' 클릭</a> > 배송지 변경
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송 배송지를 변경하지 않았는데 다른 배송지로 배송됐어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    최근에 기본배송지를 변경하였는지 확인바랍니다.
                                    <br>
                                    주소록에서 배송지를 수정/추가할 때 '기본배송지로 저장' 체크박스를 체크하시면 모든 정기배송 상품의 배송지도 일괄 수정됩니다.
                                    <br>

                                    <br>
                                    기본 배송지 확인하기
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 왼쪽 상단 고객 이름 > 주소록 관리
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • 마이쿠팡 > 배송지 관리
                                    <br>
                                    <br>

                                    정기배송 배송지 변경하기
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 정기배송 > 상품 '상세변경' 클릭 > 배송 주소 변경
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 정기배송관리 > 상품 '상세변경' 클릭</a> > 배송지 변경
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송 상품의 배송주기는 어떻게 변경하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    정기배송 상품의 배송주기는 마이쿠팡 '정기배송관리'에서 변경 가능합니다.
                                    <br>
                                    <br>
                                    정기배송 배송주기 변경하기
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 정기배송 > 상품 '상세변경' 클릭 > 배송주기 변경
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 정기배송관리 > 상품 '상세변경' 클릭</a> > 배송주기
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 상품 재고가 없어서 배송이 지연된다는 문자를 받았는데 어떻게 되는 건가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    정기배송 결제 예정 상품 중 일시품절인 상품이 포함된 경우, 결제 예정 안내 문자와 함께 일시품절임을 안내드립니다.
                                    <br>
                                    재고 확보가 어려울 경우, 일시 품절된 상품을 4일간 재고 확보를 시도하며, 그럼에도 불구하고 재고가 부족한 경우 정기배송은 건너뛰기 됩니다.
                                    <br>
                                    재고 부족으로 인한 건너뛰기가 두 번 연속 발생할 경우, 원활한 재고 확보가 어려운 상품으로 고객님에게 안내 후 해당 상품의 정기배송은 자동으로
                                    해지됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송 배송일이 일요일, 공휴일인 경우에도 배송받을 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    상품의 배송 택배사에 따라 일요일, 공휴일 배송 일정이 다릅니다.
                                    <br>
                                    <br>
                                    <b>일요일, 공휴일 배송 안내</b>
                                    <br>
                                    • 쿠팡친구(쿠친) 배송 지역 : 일요일, 공휴일에도 배송 가능합니다.
                                    <br>
                                    • 협력택배사 배송 지역 : 일요일,공휴일에는 택배 배송이 가능하지 않습니다. 1~2일 추가 배송기간이 소요될 수 있습니다.


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송 배송비가 따로 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    아니오, 쿠팡 정기배송은 로켓와우 회원 대상 서비스로 별도 배송비가 없습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송 신청했는데 정기배송관리에 신청된 상품이 없습니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    정기배송 신청할 상품을 장바구니에 담은 후, '정기배송 신청' 버튼을 클릭해주셔야 정기배송 신청이 완료됩니다.
                                    <br>
                                    정기배송 관리 페이지에 신청된 상품이 없다면 장바구니에 상품이 담겨져 있는 상태일 수 있으니 확인해주시기 바랍니다.
                                    <br>

                                    <br>
                                    <b>정기배송 장바구니 확인하기</b>
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 오른쪽 하단 장바구니 > 오른쪽 상단 '정기배송' 탭 > 상품 선택 후 [정기배송 신청] 버튼 클릭
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">오른쪽 상단 장바구니 > '정기배송'탭</a> > 상품 선택 후 [정기배송 신청] 버튼 클릭
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송으로 신청한 기저귀/분유상품의 사이즈/단계는 어떻게 변경하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    정기배송으로 신청한 '기저귀/분유' 상품은 옵션 변경을 통해 '사이즈/단계'를 변경이 가능합니다.
                                    <br>
                                    <br>
                                    <b>정기배송 옵션 변경하기</b>
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 정기배송 > 상품 '상세변경' 클릭 > 옵션/단계변경
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 정기배송관리</a> > 상품 '상세변경' 클릭 > 옵션변경
                                    <br>
                                    <br>
                                    ※ 옵션 변경이 불가한 상품은 '정기배송 해지' 후 옵션을 변경하여 '재신청'하시기 바랍니다.


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[정기배송] 정기배송에 등록한 카드정보를 삭제할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    등록된 정기배송을 해지한 후, 결제카드 삭제가 가능합니다.
                                    <br>
                                    <br>

                                    <b>정기배송 해지하기</b>
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 정기배송 > 더보기 > 상품 전체선택 > 하단의 [해지하기] 버튼 클릭
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 정기배송관리 > 상품별 변경/건너뛰기</a> > 상품별로 '변경하기' 눌러서 하단의 [정기배송 해지] 버튼 클릭
                                    <br>
                                    <br>

                                    <b>정기배송 결제카드 삭제하기</b>
                                    <br>
                                    <b>App</b>
                                    <br>
                                    • 마이 쿠팡 > 정기배송 > 결제정보 변경 > 결제정보 삭제하기
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • <a href="../">마이 쿠팡 > 정기배송관리</a> > 결제카드 정보변경 > 삭제
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[취소] 무통장입금 결제 후 주문금액을 입금했는데, 주문이 취소되었습니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    입금하신 금액은 등록된 환불계좌로 평일(영업일) 2~3일 내 환불됩니다.
                                    <br>
                                    환불계좌는 본인예금주의 계좌만 등록 가능합니다.
                                    <br>
                                    <br>

                                    <b>■ 환불계좌 등록 방법</b>
                                    <br>
                                    - PC: [<a href="">마이쿠팡 > 취소/반품/교환/환불내역</a>]에서 무통장환불 탭 내의 [입력하기] 클릭
                                    <br>
                                    - 모바일: [<a href="">마이쿠팡> 취소.교환.반품목록</a> ]에서 무통장환불 탭 내의 [계좌 등록하기] 이용
                                    <br>
                                    <br>

                                    ※ 쿠페이 회원은 환불계좌가 등록되지 않았을 경우에는 쿠페이 머니로 환불됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[취소] 취소한 경우 취소내역 및 취소전표는 어디서 확인 하나요 ?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    취소내역과 취소전표는 [마이쿠팡> 취소.반품.교환목록(환불계좌관리)]에서 확인하실 수 있습니다.
                                    <br>
                                    <b>■ 취소내역 확인하기</b>
                                    - [마이쿠팡> 취소.반품.교환목록(환불계좌관리)]에서 취소 및 반품 진행상태 확인 가능
                                    취소접수 : 주문 취소접수가 완료된 상태
                                    환불진행중 : 취소/반품 요청에 따라 주문이 취소되어 주문 취소가 진행중인 상태
                                    취소완료 : 주문 취소가 완료된 상태 (결제수단에 따른 환불기간이 소요)
                                    <br>
                                    <b>■ 취소전표 확인하기</b>
                                    - [마이쿠팡> 취소.반품.교환목록(환불계좌관리) > 취소.반품.교환목록 상세]에서 취소 전표 확인 및 출력 가능
                                    단, PC를 통해서만 확인이 가능하며 모바일,모바일웹에서는 확인이 가능하지 않습니다.

                                </p>
                            </td>
                    </table>
                </div>

                <!-- 4 -->
                <div class="qna_slide03">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠페이] 쿠팡 쿠페이(Coupay)란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡이 제공하는 쉽고, 빠르고, 안전한 간편 결제 서비스입니다.<br>
                                    쿠페이에 은행 계좌 또는 신용/체크카드 정보를 최초 1회만 등록해주세요.<br>
                                    번거로운 공인인증서나 보안카드/OTP 기기 대신 고객께서 설정하신 비밀번호를 사용하여 쉽고 빠른 결제가 가능합니다.<br>
                                    또는 쿠페이 머니 전용 충전 계좌를 발급받은 후 금액을 미리 충전(이체)하여 사용할 수도 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠페이] 쿠페이 종류는 어떤것이 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    쿠페이는 계좌이체, 신용카드, 쿠페이 머니로 이용할 수 있습니다.
                                    <br>
                                    <br>

                                    <b>■ 쿠페이 등록하기</b>
                                    <br>
                                    1. 쿠페이 계좌이체: [ <a href="">마이쿠팡 > 결제수단.쿠페이 > 결제수단 관리</a> > 결제수단 등록 > 계좌이체]
                                    <br>
                                    2. 쿠페이 신용카드: [ <a href="">마이쿠팡 > 결제수단.쿠페이 > 결제수단 관리</a> > 결제수단 등록 > 신용/체크 카드]
                                    <br>
                                    3. 쿠페이 머니 충전: [ <a href="">마이쿠팡 > 결제수단.쿠페이</a> > 충전하기]
                                    <br>
                                    쿠페이 머니는 쿠페이 계좌이체에 등록된 계좌로 즉시 충전하거나 전용 충전계좌를 발급받은 후 원하는 금액을 미리 이체(충전)하여 사용
                                    <br>
                                    <br>

                                    ※쿠페이 계좌이체/카드는 총 10개까지 등록 가능합니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[상품문의] 상품에 대해서 문의하려면 어떻게 해야 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    상품에 관한 내용은 상세 페이지 내 [상품상세]에 자세히 안내되어 있습니다.
                                    <br>
                                    [ <a href="">마이쿠팡 > 주문목록</a> ]에서 상품을 선택하여 확인하실 수 있습니다.
                                    <br>
                                    <br>

                                    상품 상세 페이지에 안내되어 있지 않은 내용은 판매자 연락처로 문의해 주십시오.
                                    <br>
                                    <br>

                                    <b>■ 판매자에게 문의하기</b>
                                    <br>
                                    1. [ <a href="">마이쿠팡 > 주문목록/배송조회</a> ]에서 상품 선택 > 배송/교환/반품 안내 > 최하단 [판매자 정보란]에서 판매자연락처로 문의
                                    <br>
                                    2. [ <a href="">마이쿠팡 > 주문목록</a> > 판매자 문의하기 ]


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[반품] 반품 신청을 취소(철회)하고 싶어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>반품할 상품이 아직 수거되지 않았거나 발송하지 않은 경우, 마이 쿠팡에서 반품 취소(철회) 가능합니다.
                                    <br>
                                    <br>

                                    <b>반품 철회하기</b><br>
                                    • <a href="../">마이쿠팡 > 주문 목록 ></a> 상품 선택 > [반품취소] 버튼 클릭
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[원터치결제] 원터치 결제란 어떤 서비스인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    원터치 결제란 고객님께 보다 빠른 결제를 제공하기 위해 쿠페이(계좌이체/머니/신용카드)
                                    <br>
                                    결제과정에서 비밀번호 기입 단계를 쿠팡의 자체보안 확인 과정으로 대체한 서비스입니다.
                                    <br>
                                    쿠페이(계좌이체/머니/신용카드)수단 선택 후, 결제하기 버튼을 터치하시는 경우 즉시 결제가 이루어집니다.
                                    <br>
                                    <br>

                                    ※ 쿠팡의 자체보안 기준에 따라 안전한 거래를 위해 기존과 같이 비밀번호를 요구하는 경우가 발생 할 수 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[주문] 쿠팡앱과 홈페이지가 아닌 판매자가 직접 거래를 요청할 경우 어떻게 해야하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    <b>쿠팡은 판매자 직접거래를 허용하고 있지 않습니다.</b>
                                    <br>
                                    판매자가 계좌이체(현금거래)를 통한 직거래를 유도하거나, 확인되지 않은 개인 판매/결제 사이트로 유도하여
                                    <br>
                                    입금 등을 통한 직거래를 유도할 경우 절대 응하지 마시고 즉시 사기 거래 신고센터 (02-2621-4699)로 신고해 주시기 바랍니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[결제수단] 이미 주문을 했는데, 결제 수단을 변경할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    결제완료 이후에는 결제수단 변경은 가능하지 않습니다. 판매중인 상품일 경우 주문 취소 후
                                    <br>
                                    원하시는 결제수단으로 다시 한 번 구매하여 주시기 바랍니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[영수증] 현금영수증 또는 신용카드 매출전표는 어떻게 받나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    구매한 상품의 매출전표/영수증은 자동 발급됩니다.
                                    <br>
                                    단, PC를 통해서만 확인이 가능하며 모바일,모바일웹에서는 확인이 가능하지 않습니다.
                                    <br>
                                    <b>■ 영수증 확인/출력하기</b>
                                    <br>
                                    1. [마이쿠팡 > MY 쇼핑 > 영수증 조회/출력]
                                    <br>
                                    2. [마이쿠팡 > 주문목록/배송조회 > 주문상세보기]
                                    <br>
                                    3. 결제영수증 정보
                                    <br>
                                    &nbsp;&nbsp;- 신용카드: [카드전표] 출력 선택<br>
                                    &nbsp;&nbsp;- 계좌이체/무통장입금: [현금영수증 승인전표] 출력 선택 <br>
                                    &nbsp;&nbsp;※ 단, 2015.07.16 이전 무통장입금 주문의 경우 국세청 홈페이지(https://www.hometax.go.kr/)를 통해 확인 바랍니다.<br>
                                    &nbsp;&nbsp;- 휴대폰: [결제영수증 조회/발급] 선택 > 결제대행사(PG사)의 거래내역 조회 페이지 연결<br>
                                    &nbsp;&nbsp;※ 휴대폰 결제 영수증의 경우 통신사에서 발행됩니다.<br>
                                    &nbsp;&nbsp;※ [쿠페이 휴대폰] 결제수단 등록은 2018년 11월 5일부로 종료되었습니다.<br>
                                    단, 이전 등록 고객은 계속해서 이용 가능합니다.<br>
                                    <br>

                                    <b>■ 현금영수증 발급받기</b><br>
                                    &nbsp;&nbsp;- 주문시점: [주문/결제 페이지 > 현금영수증] 란에서 등록/변경 가능<br>
                                    &nbsp;&nbsp;※ 쿠페이의 경우 주문전 [마이쿠팡 > 결제수단.쿠페이 > 현금영수증 설정]에서 '현금영수증 발급' 체크 및 정보입력 가능합니다.<br>

                                    <b>■ 현금영수증 소득공제 혜택을 위한 필수 정보</b><br>
                                    &nbsp;&nbsp;- 국세청 홈페이지(https://www.hometax.go.kr/)에 최초 1회 반드시 가입하셔야 합니다.<br>
                                    &nbsp;&nbsp;- 현재 국세청 사이트에 미가입 중이라 해도 회원 가입 후 24시간 후에는 기존에 발급받은 영수증 조회 및 혜택은 모두 소급 받으실 수 있습니다.<br>
                                    &nbsp;&nbsp;※ 현금영수증 문의: 홈페이지 (https://www.hometax.go.kr/) 국세청 고객센터(126)<br>
                                    &nbsp;&nbsp;※ 국세청 홈페이지(https://www.hometax.go.kr/)에서도 조회하실 수 있습니다. &nbsp;&nbsp;<br>
                                    로그인 후, '사용내역 조회 개인소득공제용' 메뉴에서 현금영수증 거래내역 조회 및 출력이 가능합니다.<br>
                                    &nbsp;&nbsp;※ 영수증 조회는 대금 결제 후 (대금 송금 후) 24시간 이후에 조회 및 출력이 가능하며, 휴대폰 결제 이용시에는 결제 후 다음달 이동통신사 결제대금을 포함한<br>
                                    휴대폰 요금을 납부하시면 휴대폰 명의자에게 통신사에서 자동 발행합니다.<br>
                                    &nbsp;&nbsp;※ 직구 상품은 판매자가 해외에 사업장을 가지고있어 해외의 법을 적용받아 현금영수증 발행을 하지 않습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[현금영수증] 현금영수증을 신청하지 못했는데, 어떻게 해야 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡은 국세청이 지정한 코드(010-000-1234)로 고객님들의 현금영수증을 자진 발급해 드리고 있습니다.<br>
                                    현금영수증 자진발급 건에 대해 현금영수증 신청을 원하실 경우,<br>
                                    결제일 다음날부터 국세청 홈페이지(https://www.hometax.go.kr/)를 통해 직접 현금영수증을 발행 받으실 수 있습니다.<br>
                                    <br>
                                    <b>■ 자진발급분 등록 방법</b><br>
                                    1. 국세청 현금영수증 홈페이지 로그인 후, "소비자 > 자진발급분 사용자등록" 메뉴 클릭<br>
                                    2. 결제금액, 승인번호 입력<br>
                                    ※ "승인 번호"는 무통장 입금의 경우에는 "현금영수증 발행 안내메일" 에서 확인하실 수 있으며,<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;쿠페이 계좌이체(또는 쿠페이 머니)의 경우 [PC 마이쿠팡 > 주문목록/배송조회 > 주문상세보기 > 결제영수증정보]에서 확인 가능합니다.<br>
                                    3. 위 정보 입력 후 '조회' 버튼 클릭하여 내역 확인 후 "등록" 버튼 클릭<br>
                                    4. 현금영수증 자진발급 등록 완료<br>
                                    <br>
                                    ※ 자진발급분은 결제 당일에는 데이터가 국세청으로 전송되지 않아 조회할 수 없습니다.<br>
                                    &nbsp;&nbsp;&nbsp;거래일 다음날부터 등록 가능합니다.<br>
                                    <br>
                                    단, 직구 상품은 판매자가 해외에 사업장을 가지고 있어 국내 소득세법이 아닌 해외의 법을 적용받아 현금영수증 발행을 하지 않습니다.<br>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[휴대폰결제] 휴대폰 결제란 무엇이며, 결제는 어떻게 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    휴대폰 결제란 정해진 소액결제 한도 내 휴대폰 SMS로 인증번호를 받고 그 인증번호를 결제창에 입력하여<br>
                                    결제하는 후불제 방식으로 결제대금은 다음 달 휴대폰 요금에 부과되어 청구됩니다.<br>
                                    <br>
                                    <b>■ 휴대폰 결제 방법</b><br>
                                    1. 주문/결제 페이지「결제 방법」선택 영역에서 "휴대폰"을 선택 후 [결제하기] 버튼 클릭<br>
                                    2. 이동통신사와 휴대폰번호, 휴대폰 명의자의 본인정보를 입력 후 [인증번호 요청] 버튼 클릭<br>
                                    3. SMS로 전송받은 인증번호를 입력 후 [결제하기] 버튼 클릭<br>
                                    <br>
                                    ※ 아래의 경우 휴대폰 결제가 불가합니다.<br>
                                    - 미성년 및 사업자, 외국인 명의로 등록된 휴대폰<br>
                                    - 미납 또는 체납 상태의 휴대폰<br>
                                    - 정액 요금제, 선불 휴대폰 등<br>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓직구] 건강식품은 몇 개까지 구매할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    건강기능식품은 최대 6병까지 구매 가능하며, 면세 통관범위를 초과한 경우에는 세관에서 폐기될 수 있습니다.
                                </p>
                            </td>
                    </table>
                </div>

                <!-- 5 -->
                <div class="qna_slide03">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 로켓모바일이란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    로켓모바일이란 쿠팡에서 휴대폰 구매 시 빠르게 배송 후 개통까지 한번에 진행해드리는 서비스로,
                                    <br>
                                    로켓 모바일 센터에서 별도 연락을 통해 개통을 지원해 드립니다.
                                    <br>
                                    <br>

                                    <b>* 로켓모바일 센터 번호 : 1599-9898</b>
                                    <br>
                                    - 상담사 연결 시간 : 평일 오전 8시~오후 8시 / 토요일 오전 9시~오후 5시
                                    <br>
                                    - 개통 시간 : 평일 오전 8시~오후 9시 / 토요일 오전 9시~오후 6시
                                    <br>
                                    (일요일, 신정, 구정, 추석 당일에만 휴무. 그 외 공휴일은 모두 운영)
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 로켓모바일 상품 구매 시 카드할인을 받을 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    네, 카드할인은 기기값 할인과 통신요금 카드할인을 제공받을 수 있습니다.
                                    <br>
                                    기기 값 할인은 쿠팡에서 상품 구매 시 통신요금 카드할인은 통신사 별 할인조건이 다르므로,<br>
                                    상세 내용은 각 통신사 홈페이지 참고 바랍니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 유심은 휴대폰에 어떻게 설치하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    휴대폰 기종마다 유심 삽입 위치와 크기가 다르기때문에,
                                    <br>
                                    휴대폰 기기 박스 내 상품설명서를 참고하여 설치 바랍니다.
                                    <br>
                                    <br>
                                    ※ 개통 전 삽입 시, 휴대폰 이용이 불가할 수 있으므로 개통문자 수신 후 유심 설치 바랍니다.


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 알뜰폰 유심이란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>알뜰폰 요금제를 사용하기 위한 유심입니다.
                                    <br>
                                    상세한 정보는 알뜰폰 홈페이지 혹은 고객센터로 문의 바랍니다.
                                    <br>
                                    <br>

                                    <b>■ 알뜰폰 고객센터</b>
                                    <br>
                                    - Live M: 1522-9999
                                    <br>
                                    - KT M Mobile: 1899-5000
                                    <br>
                                    - U+ 알뜰모바일: 1670-0283
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 이용할 수 있는 요금제는 어떤게 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    휴대폰 구매/결제 단계에서 이용가능한 요금제 확인이 가능합니다.
                                    <br>
                                    자세한 요금제 정보는 통신사의 홈페이지 혹은 통신사 앱을 통해 확인 가능합니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 알뜰폰이란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    알뜰폰은 기존 이동통신사(SKT, KT, LG U+)의 통신망을 빌려 제공하는 통신서비스 입니다.
                                    <br>
                                    통신사 멤버십 혜택이 없는 대신, 요금제를 저렴하게 이용할 수 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 휴대폰 구매 후 개통은 어떻게 진행되나요?<span>펼치기</span>
                            </td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    휴대폰 구매 완료 시 개통센터에서 순차적으로 고객님께 연락을 드릴 예정입니다.
                                    <br>
                                    개통을 위해 필요한 서류를 준비해주시면 빠른 처리가 가능하며, 자세한 사항은 아래의 내용을 참고해 주시기 바랍니다.
                                    <br>
                                    <br>

                                    ※ 개통센터 연락처: 1599-9898
                                    <br>
                                    <br>

                                    <b>■ 가입유형 별 사전 준비 필요사항</b>
                                    <br>
                                    <b>[신규가입]</b>
                                    <br>
                                    1. 본인(또는 법정대리인) 명의 신용카드​
                                    <br>
                                    &nbsp;&nbsp;&nbsp;* KT 의 경우, 카드사에 등록된 휴대폰 연락처 필요
                                    <br>
                                    2. 통신요금 납부수단 (신용카드 or 계좌)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;* KT 의 경우, 체크카드도 가능
                                    <br>
                                    3. 가입자 신분증 (택 1)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 주민등록증, 운전면허증, 국가유공자증, 장애인등록증​, 외국인 등록증
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 청소년일 경우, 법정 대리인의 신분증 확인 및 통화 연결 필수
                                    <br>
                                    4. 개통 희망 번호 뒤 4자리
                                    <br>
                                    <br>

                                    <b>[기기변경]</b>
                                    <br>
                                    1. 본인(또는 법정대리인) 명의 신용카드​
                                    <br>
                                    &nbsp;&nbsp;&nbsp;* KT 의 경우, 카드사에 등록된 휴대폰 연락처 필요
                                    <br>
                                    2. 통신요금 납부수단 (신용카드 or 계좌)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;* KT 의 경우, 체크카드도 가능
                                    <br>
                                    3. 가입자 신분증 (택 1)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 주민등록증, 운전면허증, 국가유공자증, 장애인등록증​, 외국인 등록증
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 청소년일 경우, 법정 대리인의 신분증 확인 및 통화 연결 필수
                                    <br>
                                    4. 현재 이용 중인 휴대폰 할부 및 위약금 사전 확인 후 정리​
                                    <br>
                                    <br>

                                    <b>[번호이동]</b>
                                    <br>
                                    1. 본인(또는 법정대리인) 명의 신용카드​
                                    <br>
                                    &nbsp;&nbsp;&nbsp;* KT 의 경우, 카드사에 등록된 휴대폰 연락처 필요
                                    <br>
                                    2. 통신요금 납부수단 (신용카드 or 계좌)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;*KT 의 경우, 체크카드도 가능
                                    <br>
                                    3. 가입자 신분증 (택 1)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 주민등록증, 운전면허증, 국가유공자증, 장애인등록증​, 외국인 등록증
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 청소년일 경우, 법정 대리인의 신분증 확인 및 통화 연결 필수
                                    <br>
                                    4. 번호이동 정보(택1)
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 휴대폰 일련번호 뒷자리
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 요금납부 은행 계좌번호 뒷 네자리
                                    <br>
                                    &nbsp;&nbsp;&nbsp;- 요금납부 신용카드 뒷 네자리​
                                    <br>
                                    5. 현재 이용 중인 휴대폰 할부 및 위약금 사전 확인 후 정리
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 기기할인과 요금할인 중에 어떤 할인이 더 유리한가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    구매하는 휴대폰 기종, 요금제에 따라 다르기 때문에 상품 구매 단계에서 비교하여 구매 바랍니다.


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 할인 방법에는 어떤것이 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    할인방법에는 기기할인/요금할인이 있으며,
                                    <br>
                                    자세한 할인내역은 휴대폰 구매/결제 단계에서 확인 가능합니다.
                                    <br>
                                    <br>

                                    <b>■ 할인방법</b>
                                    <br>
                                    1. 기기할인: 휴대폰 기기 가격 자체에서 할인을 받는 방법
                                    <br>
                                    2. 요금할인: 월별 통신 요금을 할인 받는 방법
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 기존에 사용하던 유심(USIM)이 있는데, 새로 구매한 휴대폰에 그대로 사용할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡에서 판매하는 휴대폰의 유심은 '나노유심'만 사용 가능합니다.
                                    <br>
                                    기존에 사용했던 유심이 일반유심이라면 휴대폰 구매 시 나노유심을 함께 구매하시길 바랍니다.
                                    <br>
                                    <br>

                                    ※ 단, 알뜰폰의 경우 알뜰폰 유심을 통해서만 개통이 가능하므로, 알뜰폰 구매 시 참고 바랍니다
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[로켓모바일] 가입유형에는 무엇이 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    가입유형은 '신규가입, 기기변경, 번호이동'이 있습니다.
                                    <br>
                                    휴대폰 구매 시, 구매/결제창에서 선택 후 구매 가능합니다.
                                    <br>
                                    <br>

                                    ■ 가입유형이란?
                                    <br>
                                    1. 신규가입: 통신사에 신규 회원으로 가입하여 새로운 번호로 휴대폰을 개통하는 가입 유형
                                    <br>
                                    2. 기기변경: 현재 사용하고있는 통신사와 휴대폰 번호를 그대로 사용하고, 휴대폰 기기만 교체하는 가입 유형
                                    <br>
                                    3. 번호이동: 기존 사용하던 통신사에서 다른 통신사로 이동하여 개통하는 가입 유형
                                </p>
                            </td>
                    </table>
                </div>

                <!-- 6 -->
                <div class="qna_slide03">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠팡캐시] 쿠팡캐시란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡캐시란 쿠팡에서 상품 구매 시 현금처럼 사용할 수 있는 사이버 머니를 말합니다.
                                    <br>
                                    <b>■ 쿠팡캐시 이용 안내</b>
                                    <br>
                                    - 쿠팡에서 상품 구매 시, 전액 또는 다른 결제수단과 함께 사용, 결제할 수 있습니다. (최소 1점부터 사용 가능)
                                    <br><br>
                                    - [ <a href="">마이쿠팡 > 쿠팡캐시</a> ]에서 보유하고 있는 쿠팡캐시 잔액 및 적립/사용내역을 확인할 수 있습니다.<br>
                                    - 쿠팡캐시 사용 시 유효기간 만료일이 가까운 캐시부터 먼저 차감됩니다.<br>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠팡캐시] 쿠팡캐시는 어떻게 사용하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡캐시는 주문/결제 페이지의 [쿠팡캐시 사용]에서 보유하신 금액만큼 사용하실 수 있습니다.<br>
                                    신용카드, 휴대폰 결제, 무통장입금, 계좌이체, 쿠페이 머니 결제와 함께 사용 가능합니다.<br>
                                    <br>
                                    <br>
                                    <b>■ 쿠팡캐시 사용하기</b>
                                    <br>
                                    1. 주문/결제 페이지 「쿠팡캐시 사용」에서 사용하실 쿠팡캐시 금액을 입력합니다.<br>
                                    ※ 쿠팡캐시 사용금액은 잔여 쿠팡캐시보다 많이 입력할 수 없습니다.<br>
                                    <br>
                                    2. 상품금액보다 보유 중인 쿠팡캐시 금액이 적을 경우 다른 결제수단과 함께 결제하시기 바랍니다.


                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠팡캐시] 쿠팡캐시는 어떻게 적립받을 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    현재, 쿠페이 머니와 쿠페이 계좌이체 결제를 통해 적립 받으실 수 있습니다.
                                    <br>
                                    <br>
                                    <b>■ 기본 혜택</b>
                                    <br>
                                    - 쿠페이 머니 결제 시, 결제금액의 1%를 쿠팡캐시로 적립(월 최대 1만원까지 적립 가능)
                                    <br>
                                    <br>
                                    <b>■ 추가 혜택</b>
                                    <br>
                                    로켓와우클럽 멤버십 가입 후 30일 이벤트 기간 내 추가 혜택 대상인 경우:
                                    <br>
                                    - 쿠페이 계좌이체로 결제 시, 결제금액의 2%를 쿠팡캐시로 적립(최대 2만원까지 적립 가능)
                                    <br>
                                    - 쿠페이 머니로 결제 시, 결제금액의 4%를 쿠팡캐시로 적립(최대 4만원까지 적립 가능)
                                    <br>
                                    ex) 기본 혜택 1% + 추가 혜택 4%, 총 5% 쿠팡캐시 적립
                                    <br>
                                    <br>
                                    <b>■ 기타 쿠팡캐시 적립 방법</b>
                                    <br>
                                    • 쿠팡 이벤트, 캐시백
                                    <br>
                                    • 쿠팡 기프트 카드 전환
                                    <br>
                                    • 미사용 티켓 환불
                                    <br>
                                    • 쿠페이 머니를 쿠팡 캐시로 전환
                                    <br>
                                    • 제휴포인트(카드사 등) 전환
                                    <br>
                                    <br>

                                    <b>■ 쿠팡캐시 및 캐시 유효기간 확인하기</b>
                                    <br>
                                    <b>Web</b>
                                    <br>
                                    • 마이쿠팡 > 쿠팡캐시/기프트카드 > [쿠팡캐시 적립 및 사용내역] 클릭
                                    <br>
                                    <b>APP</b>
                                    <br>
                                    • 마이쿠팡 > 쿠팡캐시·기프트카드·제휴포인트 > [쿠팡캐시 적립 및 사용내역] 클릭
                                    <br><br>
                                    ※ 유효기간 내에 사용하지 않은 쿠팡캐시는 만료일 자정에 자동으로 소멸됩니다.
                                    <br>
                                    ※ 쿠팡캐시 예상 적립금은 [마이쿠팡 > 결제수단·쿠페이 > 쿠페이 적립 혜택] 메뉴에서 확인할 수 있습니다.
                                    <br>
                                    ※ 주문 취소 시, 쿠팡캐시 적립 한도는 주문 취소 완료 후 복구됩니다.
                                    <br>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠팡캐시] 쿠팡캐시의 사용 최소단위는 어떻게 되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>쿠팡캐시의 최소 1점(=1원)부터 이용하실 수 있습니다.
                                    <br><br>
                                    ※ 주문시 사용금액은 1회 최대 50만원까지 사용할 수 있으며,<br>
                                    보유하고 계신 쿠팡캐시는 에서 확인하실 수 있습니다.<br>
                                    <br>
                                    쿠팡캐시 적립금액이 50만원을 초과하는 경우, 예치금으로 별도 적립됩니다.<br>
                                    예치금에 잔액이 있고 쿠팡 캐시의 보유액이 50만원 미만이라면,<br>
                                    쿠팡캐시 개인보유한도(50만원)까지 예치금은 쿠팡캐시로 자동전환됩니다.<br>

                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[쿠팡캐시] 쿠팡캐시는 타인에게 양도 할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡캐시는 양도가 불가능하며, 고객님 본인만 사용하실 수 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[기프트카드] 쿠팡 기프트카드는 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡의 다양한 상품과 편리한 구매 경험을 고객님의 친구와 가족에게 선물할 수 있는 서비스 입니다.
                                    <br>
                                    쿠팡 기프트카드는 쿠팡 앱과 제휴 중인 외부 복지몰에서 구매 가능하며, 쿠팡캐시로 전환 후 쿠팡에서 사용하실 수 있습니다.
                                    <br>
                                    <br>

                                    <b>■ 쿠팡캐시로 전환하기</b>
                                    <br>
                                    모바일: [마이쿠팡 > 쿠팡캐시.제휴 포인트 전환 > 기프트카드 등록]
                                    <br>
                                    PC: [마이쿠팡 > 쿠팡캐시 > 기프트카드 등록]
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[기프트카드] 기프트카드를 쿠팡캐시로 등록했는데요, 잔액 확인은 어디서 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    [마이쿠팡 > 쿠팡캐시] 메뉴의 [사용가능 캐시]에서 사용가능한 잔액을 확인할 수 있으며,
                                    <br>
                                    하단의 [쿠팡캐시 적립 및 사용내역] 에서 적립캐시, 사용캐시, 잔여캐시를 확인할 수 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[기프트카드] 기프트카드 환불신청은 어떻게 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    <b>■ 쿠팡앱에서 구매한 기프트카드 환불신청 방법</b>
                                    <br>
                                    기프트카드를 받는 분이 수락하기 전이라면 [ <a href="">마이쿠팡 > 주문목록</a> ]에서 주문취소 가능합니다.
                                    <br>
                                    만약 받는 분이 수락하여 쿠팡캐시로 전환되었다면, 쿠팡 고객센터로 문의해 주십시오.
                                    <br>
                                    단, 원금의 60% 이상을 사용해야만(1만원권 이하의 경우 80%) 나머지 잔액을 환불받을 수 있는 점 참고 바랍니다.
                                    <br><br>
                                    <b>■ 복지몰에서 구매한 기프트카드 환불신청 방법</b>
                                    <br>
                                    난수번호(일회용 등록번호)를 쿠팡에 등록하기 전이라면 구매하신 복지몰로 문의해 주십시오.
                                    <br>
                                    만약 쿠팡에 기프트카드 난수번호를 등록하여 쿠팡캐시로 전환되었다면, 쿠팡 고객센터로 문의해 주십시오.
                                    <br>
                                    단, 원금의 60% 이상을 사용해야만(1만원권 이하의 경우 80% 이상) 나머지 잔액을 환불받을 수 있는 점 참고 바랍니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[기프트카드] 기프트카드의 유효기간은 어떻게 되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    기프트카드 구매 후 전환된 쿠팡캐시는 5년간 유효합니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[기프트카드] 쿠팡캐시로 전환 후 결제한 내역을 취소/반품 했는데, 쿠팡캐시 재적립이 안돼요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡 고객센터로(1577-7011)연락주세요.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[할인쿠폰] 할인쿠폰은 어떻게 사용하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    한 상품에 한 개의 할인쿠폰만 적용할 수 있으며,
                                    <br>
                                    주문/결제 페이지의 "할인쿠폰 사용"에서 적용 가능한 할인쿠폰을 확인 후 사용하실 수 있습니다.
                                    <br><br>
                                    ※ 할인쿠폰에 따라 사용조건이 다릅니다.
                                    <br>
                                    [ <a href="">마이쿠팡 > 할인쿠폰</a> ]에서 보유중인 할인쿠폰 내역과 사용조건을 확인하시기 바랍니다.
                                </p>
                            </td>
                    </table>
                </div>

                <!-- 7 -->
                <div class="qna_slide03">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>알 수 없는 번호(스미싱)로 쿠팡 관련 문자를 받았어요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    ※ 피싱/스미싱 사기에 주의하시기 바랍니다. (쿠팡/쿠팡 배송직원 사칭 포함)
                                    <br>
                                    <br>

                                    1577-7011(쿠팡 공식 번호)로 발송되었는지 확인해주시기 바랍니다.
                                    <br>
                                    다른 번호로 쿠팡 관련 문자를 수신한 경우, 절대 문자 내 링크를 클릭하거나 해당 번호로 연락하지 마시고, 쿠팡 고객센터로 연락해주시기 바랍니다.
                                    <br>
                                    <br>

                                    쿠팡 고객센터
                                    <br>
                                    • 전화번호 : 1577-7011
                                    <br>
                                    • 운영시간 : 365일 24시간 연중무휴
                                    <br>
                                    • 전화 문의가 어려우신 경우, 채팅 상담 또는 에 의견을 남겨주시기 바랍니다.
                                    <br>
                                    <br>
                                    만약 링크를 클릭하여 피해가 발생하였다면, 아래 신고 기관으로 신고하시기 바랍니다.
                                    <br>
                                    - 휴대폰 소액결제 내역을 확인하고 통신사에 소액결제 사용중지를 요청하시기 바랍니다.
                                    <br>
                                    <br>

                                    [신고기관]
                                    <br>
                                    ECRM 경찰청 사이버범죄 신고시스템
                                    <br>
                                    • (국번 없이) 182
                                    <br>
                                    • <a href="https://ecrm.police.go.kr/minwon/main">https://ecrm.police.go.kr/minwon/main</a>
                                    <br>
                                    <br>
                                    KISA 인터넷 침해 대응센터
                                    <br>
                                    • (국번 없이) 118
                                    <br>
                                    • <a href="http://www.krcert.or.kr">http://www.krcert.or.kr</a>
                                    <br>
                                    <br>
                                    KISA 불법스팸 대응센터
                                    <br>
                                    • (국번 없이) 118
                                    <br>
                                    • <a href="https://spam.kisa.or.kr/spam/main.do">https://spam.kisa.or.kr/spam/main.do</a>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[분쟁처리] 분쟁처리절차는 어떻게 되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    통신판매중개자 또는 통신판매중개의뢰자에 의하여 발생한 불만이나 분쟁을 해결하기 위한 절차는 아래의 내용을 참고해 주시기 바랍니다.
                                    <br>
                                    <br>
                                    <b>■ 분쟁처리절차</b>
                                    <br>
                                    <br>
                                    <b>- '로켓배송' 상품의 고객문의가 접수되는 경우:</b>
                                    <br>
                                    쿠팡이 문의내용을 확인하여 문의 해결 후 고객에게 처리결과를 안내합니다.
                                    <br>
                                    <br>

                                    <b>- 통신판매중개의뢰자인 '판매자배송(오픈마켓)' 상품의 고객문의가 접수되는 경우:</b>
                                    <br>
                                    ① 개별 판매자가 문의를 해결하고 고객에게 처리결과를 답변함이 원칙입니다.
                                    <br>
                                    ② 다만, 고객과 판매자 간에 분쟁이 있거나 판매자가 고객의 문의에 대응이 없는 등의 경우 쿠팡은 통신판매중개자로서 분쟁의 원만한 해결을 위해 판매자에게 고객문의 내용을 직접 확인한 후 고객에게 평일(영업일) 기준 3일 이내 진행경과를 알리고, 평일(영업일) 기준 10일 이내 조사 결과 또는 처리방안을 안내합니다.
                                    <br>
                                    <br>
                                    <b>※ 통신판매중개자인 '쿠팡'에 대해 고객문의가 접수되는 경우:</b>
                                    <br>
                                    ① 쿠팡은 고객이 정당한 의견이나 불만을 제기하는 경우 그 신청을 받은 날로부터 고객의 불만 원인 등을 조사하여 평일(영업일) 기준 3일 이내에 진행 결과를 고객에게 전달하여야 하고, 평일(영업일) 기준 10일 이내에 조사 결과 또는 처리 방안을 고객에게 알려야 합니다.
                                    <br>
                                    ② 고객은 제1항의 분쟁처리 결과에 대하여 이의가 있을 때에는 쿠팡의 처리센터를 통하여 이의를 제기할 수 있으며, 그 이의가 받아들여지지 않을 때에는 소비자분쟁조정위원회에 분쟁조정 신청을 할 수 있습니다.
                                    <br>
                                    ③ 쿠팡은 고객으로부터 전화, FAX, E-mail, 사이트 게시판, 앱 등을 통해 정당한 의견이나 불만을 받을 수 있으며, 이와 같은 절차는 신청에서부터 조사, 처리 결과까지 고객이 원하는 방식으로 이루어져야 합니다.
                                    <br>
                                    ④ 쿠팡은 제3항의 수단으로 불만 등을 접수 받은 경우 접수사실을 접수 받은 방법으로 통지하고 지체없이 사실관계를 파악하여 고객에게 손해가 발생하였는지 여부 등을 확인한 뒤에 처리 방안을 마련합니다.
                                    <br>
                                    ⑤ 쿠팡은 고객문의에 대하여 쿠팡 사이트, 정책, 서비스 등을 개선하도록 노력합니다.
                                    <br>
                                    <br>
                                    <b>■ 판매자 문의하기</b>
                                    <br>
                                    <a href="">[마이쿠팡] > [주문목록]</a> > [판매자 문의하기]
                                    <br>
                                    <br>
                                    ※ 365고객센터 전자금융거래분쟁처리담당
                                    <br>
                                    - 전화: 1577-7011
                                    <br>
                                    - 주소: 서울시 송파구 송파대로 570
                                    <br>
                                    - Email : help@coupang.com
                                    <br>
                                    <br>
                                    ※ 1372 소비자상담센터
                                    <br>
                                    - 전화 국번없이 1372
                                    <br>
                                    - 인터넷을 이용한 24시간 상담접수 (<a href="www.ccn.go.kr">www.ccn.go.kr</a>)
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[회원정보] 광고성 이메일과 문자를 받지 않으려면 어떻게 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    회원정보 수정에서 이메일과 SMS 수신동의 체크를 해제하시면 됩니다.
                                    <br>
                                    <br>
                                    <b>■ 광고성 이메일/문자 수신 거부하기</b>
                                    <br>
                                    1. 모바일 앱: [ <a href="">마이쿠팡 > 내정보관리 > 회원정보 수정</a> ]에서 '할인쿠폰, 특가 상품, 이벤트 소식 받기' 체크 해제
                                    <br>
                                    2. PC: [ <a href="">마이쿠팡 > 개인정보수정/확인</a> ]에서 '수신설정' 체크 해제
                                    <br>
                                    <br>
                                    <b>■ 모바일 알림(App Push) 설정하기</b>
                                    <br>
                                    [ <a href="">마이쿠팡 > 내정보관리</a> > 알림설정 ]에서 ON/OFF 버튼 클릭
                                    <br>
                                    <br>
                                    ※ 수신동의 해제 후에도 2~3일 정도는 수신될 수 있습니다.
                                    <br>
                                    ※ 구매정보 및 서비스 주요 정책 변경 등의 정보성 안내 메일은 수신동의와 무관하게 발송됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[회원정보] 개인정보와 관련된 피해를 입은 경우 어떻게 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡은 고객님의 개인정보를 [개인정보 취급방침] 에서 고지한 범위 내에서 사용하며<br>
                                    고지한 범위를 초과하여 이용하거나, 타인 또는 타기업, 기관에 제공하지 않습니다.
                                    <br>
                                    ※ 만일 회원 아이디와 비밀번호의 불법 도용 등 회원정보와 관련한 피해가 발생한 경우에는<br>
                                    바로 쿠팡 고객센터(☎1577-7011) 또는 모바일 앱 [고객센터> 채팅문의]를 통해 피해 내용을 알려주시기 바랍니다. <br>
                                    ※ 개인정보와 관련하여 분쟁이 있는 경우에는 2차 민원처리 기관인 개인정보보호진흥원(KISA)의 개인정보분쟁조정위원회로<br>
                                    개인정보 민원신청을 하실 수 있습니다
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[입점문의] 쿠팡에 입점하려면 어떻게 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    입점을 신청은 PC 홈페이지에서 가능합니다.
                                    <br>
                                    <br> [ <a href="">입점 신청 바로가기</a> ]
                                    <br>
                                    <br>
                                    <b>■ 입점 신청하기</b>
                                    1. PC 홈페이지 접속
                                    <br>
                                    2. 왼쪽 상단 '입점 신청' or 하단 '입점/제휴문의' 선택
                                    <br>
                                    3. [지금 판매하기] 선택
                                    <br>
                                    <br>
                                    ※ 쿠팡 오픈마켓 입점의 경우 내용 입력 후 필요서류를 정확하게 등록해주시면 2일 이내에 입점이 완료됩니다
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[고객센터] 고객센터 운영시간은 어떻게 되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡 고객센터는 365일 24시간 연중무휴로 운영합니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[비밀번호] 비밀번호가 기억나지 않아요.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    쿠팡의 회원 비밀번호는 암호화 저장되어 분실 시 찾아드릴 수 없습니다.
                                    <br>
                                    아래의 경로로 비밀번호를 재설정해 주시기 바랍니다.
                                    <br>
                                    <br>
                                    <b>■ 비밀번호 재설정하기</b>
                                    <br>
                                    1. 쿠팡 로그인 화면에서 선택
                                    <br>
                                    2. 회원정보 확인: 이름, 아이디(이메일)입력
                                    <br>
                                    3. 비밀번호 찾는 방법 선택 (휴대폰 또는 이메일)
                                    <br>
                                    3-1. '휴대폰' 선택 시 등록된 휴대폰 번호로 인증완료 후, 새로운 비밀번호 설정
                                    <br>
                                    3-2. '이메일' 선택 시 이메일로 발송된 비밀번호 재설정 링크 선택하여 새로운 비밀번호 설정 (해당 링크는 1시간동안만 유효함)
                                    <br>
                                    <br>
                                    <b>■ 이메일 주소와 휴대폰 번호가 변경되어 찾을 수 없는 경우</b>
                                    <br>
                                    비밀번호 찾기는 회원정보에 등록되어있는 이메일 주소나 등록된 휴대폰 번호로 확인 가능합니다.
                                    <br>
                                    정보가 변경된 경우, 쿠팡 고객센터(☎1577-7011)또는 모바일 앱 [ 마이쿠팡 > 고객센터 > 상담하기 ]로 문의하시면 신속히 처리해 드리겠습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[회원정보] 회원정보 수정은 어떻게 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    회원정보에서는 이름(개명), 아이디(이메일), 휴대폰번호, 비밀번호, 주소록.배송지를 수정할 수 있습니다.
                                    <br>
                                    <br>
                                    <b>■ 회원정보 수정하기</b>
                                    <br>
                                    1. 모바일 앱: [ <a href="">마이쿠팡 > 내정보관리 > 회원정보 수정</a> ]에서 변경
                                    <br>
                                    ※ 주소지/배송지 변경 시 [ <a href="">마이쿠팡 > 내정보관리 > 주소록 관리</a> ]에서 변경
                                    <br>
                                    2. PC: [ <a href="">마이쿠팡 > 개인정보수정/확인</a> ]에서 변경
                                    <br>
                                    <br>
                                    <b>■ 이름 변경하기</b>
                                    <br>
                                    이름 변경은 실명기관에 해당 정보가 있어야 가능합니다. 실명기관에 개명 정보가 등록되지 않은 경우 실명등록센터에서 실명등록을 마친 후, 정보 변경을 해주시기 바랍니다.
                                    <br>
                                    ※ 실명등록센터 : NICE 신용평가정보(주)
                                    <br>
                                    - 홈페이지: <a href="https://www.niceid.co.kr">https://www.niceid.co.kr</a>
                                    <br>
                                    - 고객센터: 1600-1522
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[회원가입] 인증된 아이디가 이미 존재한다고 나옵니다.<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    본인인증 시도 시 "회원님 명의로 인증된 아이디가 이미 존재합니다."로 안내되는 경우,
                                    <br>
                                    고객님의 정보로 이미 가입된 다른 아이디가 존재하는 것이기 때문에 새로 본인인증을 받을 수 없습니다.
                                    <br>
                                    이미 가입된 아이디를 사용해주시고, 비밀번호를 모르시는 경우 로그인 창에서 [ <a href="">비밀번호 찾기</a> ]를 이용해주세요.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[회원탈퇴] 탈퇴하면 개인정보는 모두 삭제되나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    <b>
                                        회원탈퇴와 함께 고객님의 개인정보는 완전 삭제되어 재가입을 해도 구매내역 확인이 불가합니다.
                                        <br><br>
                                        단, 상법 및 전자상거래 등에서의 소비자 보호에 관한 법률 등 관련법령에 의하여 아래와 같이 거래 관련 권리 의무 관계의 확인 등을 이유로
                                        <br>
                                        일정기간 보유하여야 할 필요가 있을 경우에는 정해진 기간 동안 보유 후 파기합니다.
                                        <br>
                                        - 계약 또는 청약철회 등에 관한 기록: 5년
                                        <br>
                                        - 대금 결제 및 재화 등의 공급에 관한 기록: 5년
                                        <br>
                                        - 소비자의 불만 또는 분쟁에 관한 기록: 3년
                                        <br>
                                    </b>
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[회원정보] 본인명의 휴대폰인증이 안되는 경우도 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    타인 및 법인 명의, 일시정지된 휴대폰 등의 경우 휴대폰 인증을 할 수 없습니다.
                                    <br>
                                    <br>
                                    <b>1. 본인명의 인증이 불가한 기기(휴대폰) :</b> 선불 휴대폰
                                    <br>
                                    <b>2. 본인인증이 불가능한 상태 :</b>
                                    <br>
                                    - 분실 또는 일지정지(이용자의 요청 또는 미납 상태) 상태
                                    <br>
                                    - 법인 명의로 개통
                                    <br>
                                    - 이동 통신사에 미등록된 휴대폰(해지 또는 미개통)
                                </p>
                            </td>
                    </table>
                </div>

                <!-- 8 -->
                <div class="qna_slide03">
                    <table>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 항공권] 예약 시 여권 유효기간이 얼마나 남아 있어야 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    여권 유효기간은 출국일 기준으로 최소 6개월 이상 남아 있어야 합니다.
                                    <br>
                                    여권 유효기간이 6개월 미만인 경우 탑승 수속 및 출국이 불가 할 수 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 항공권] 결제 후 지불 수단을 변경할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    결제 정보가 항공권 상에 입력되기 때문에 발행된 이후에는 지불 수단 변경이 가능하지 않습니다.
                                    <br>
                                    지불 수단 변경이 불가피한 경우, 항공권은 환불 후 재구매 하셔야 하오니 참조 부탁 드리며
                                    <br>
                                    재구매 시에는요금 규정상 표기되어 있는 환불 수수료가 적용 됩니다
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 항공권] 카드 할인 조건 운임 결제 수단 변경 문의<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    실시간 항공권 예약 시 선택하신 운임의 결제조건에 해당하는 카드가 없는 경우 결제카드를 변경하실 수 있습니다.

                                    단, 결제카드 변경 시 할인조건과 항공운임이 변경될 수 있습니다.



                                    ■ 실시간항공권 예약 건 결제카드 변경하기

                                    1. <a href="">실시간항공권 > 예약 확인/결제</a> > 예약번호 클릭

                                    2. 결제 방법 선택 > 할인조건변경 클릭 시 결제 수단별 이용 가능한 운임 확인 가
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[실시간 항공권] 여권정보를 수정할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>[ <a href="">실시간항공권 > 예약 확인/결제</a> ]에서 [예약번호] 클릭 후 정보를 등록하면 자동으로 수정됩니다.
                                    <br>
                                    여권정보는 탑승일 기준으로 72시간 이전까지 수정 가능합니다.
                                    <br>
                                    <br>

                                    항공권에는 여권정보가 별도로 기재되지 않으므로 수정 후 재 출력 하지 않으셔도 됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[실시간 항공권] 탑승자 이름을 변경할 수 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    탑승객 영문명은 여권과 동일해야 합니다.
                                    <br>
                                    [ <a href="">예약 확인/결제</a> ]에서 변경 신청이 가능합니다.
                                    <br>
                                    자세한 가이드는 아래 내용 확인 바랍니다.
                                    <br>
                                    <br>
                                    ■ 예약된 영문명이 여권과 다른 경우
                                    <br>
                                    1.실시간 항공권 > [ <a href="">예약 확인/결제</a> ] 탭 선택
                                    <br>
                                    2. 예약번호 클릭 > 탑승객 이름 변경]에서 변경 요청
                                    <br>
                                    3. 항공사 확인 후 변경 가능 여부 회신
                                    <br>
                                    ※ 영문명 변경은 항공사 규정에 따라 진행되며, 일부 항공사의 경우 영문명 변경이 불가할 수 있습니다. 예약 시 여권상 이름으로 등록해 주시기 바랍니다.
                                    <br>
                                    <br>

                                    ■ 결제 후 탑승자 이름 변경하기
                                    <br>
                                    결제 후에는 변경 허용되는 항공사에 한해서 [ <a href="">예약 확인/결제</a> ] 페이지에 여권사본을 등록해야 합니다.
                                    <br>
                                    단, 여행사 재발행 수수료 3만원 및 그 외 추가 비용이 발생 할 수 있습니다.
                                    <br>
                                    <br>

                                    ■ 탑승자 이름 변경이 불가할 경우
                                    <br>
                                    기존 항공권 환불 후 항공권을 재구매하셔야 합니다.
                                    <br>
                                    이 경우 항공사 환불 수수료 및 여행사 수수료가 부과됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 호텔] 디포짓(Deposit)이 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    대부분의 호텔에서는 보증금의 목적으로 카드 가승인을 진행합니다.
                                    <br>
                                    이를 디포짓(Deposit)이라고 하며 간혹 현금으로 하는 경우도 있습니다.
                                    <br>
                                    디포짓(Deposit)은 객실 요금에 대해 중복으로 결제하는 것이 아니라 투숙 기간 동안
                                    <br>
                                    발생할 수 있는 비용(미니바, 전화 요금 등)에 대비하여 일부 금액을 승인해두고 비용 발생 기록이 없으면 승인을
                                    <br>
                                    취소하거나 매입하지 않습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 항공권] 미국 무비자(ESTA) 체크사항이 있나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    미국이 도착지 또는 경유지인 경우 비자면제프로그램을 이용하기 위해서는반드시 <b>미국 ESTA 전자여행허가서</b>를 발급받아야 합니다.
                                    <br>
                                    이 때, 여행기간은 90일 미만이어야 하며 방문 목적이 사업 또는 관광이어야 합니다.
                                    <br>
                                    <br>
                                    <b>■ 전자여행허가(ESTA) 발급받기</b>
                                    <br>
                                    - [ <a href="">전자여행허가(ESTA) 발급받기</a> ]에서 온라인 신청서 작성 후 승인
                                    <br>
                                    - 전자여행허가(ESTA) 신청은 여행 전 언제든지 가능하지만, 늦어도 출발 72시간 전까지 신청 권장함
                                    <br>
                                    - 승인번호를 부여 받은 후 승인 내역을 반드시 출력하여 이용
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 항공권] 노쇼(No-Show)란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    항공권 구매처로 사전 취소 요청 없이 탑승하지 않는 것을 노쇼(No-Show)라고 합니다.
                                    <br>
                                    노쇼(No-Show)가 발생 했을 경우, 항공사 규정에 따라서 별도의 수수료가 발생하거나
                                    <br>
                                    항공권의 유효성이 상실 될 수 있습니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[실시간 항공권] 미확정 요금이란 무엇인가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    항공사로 요금 사용에 대한 승인이 필요한 경우 미확정 요금으로 예약이 완료 됩니다.
                                    <br>
                                    미확정 요금의 경우 선택 하신 요금보다 인상 될 수 있으며, 운임규정 또한 변경 될 수 있습니다.
                                    <br>
                                    <br>
                                    요금이 확정 된 이후에는 [ <a href=""> 실시간항공권 > 예약 확인/결제</a> ] 페이지에서 요금 및 규정 확인 후 결제 바랍니다.
                                    <br>
                                    결제 시한까지 요금이 확정되지 않을 경우 자동 취소됩니다.
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[실시간 항공권] 여행자 보험에 가입하고 싶은데 어떻게 해야 하나요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>

                                    여행자 보험은 온라인투어 홈페이지 (<a href="https://www.onlinetour.co.kr/main">https://www.onlinetour.co.kr/main</a>) 에서 직접 가입할 수 있습니다.
                                    <br>
                                    <br>
                                    <b>■ (주)온라인투어</b>
                                    <br>
                                    연락처 : 02-3705-8282
                                    <br>
                                    평일 : 09:00~18:00, 주말/휴일 상담 불가
                                </p>
                            </td>
                        <tr>
                            <th>Q.</th>
                            <td>[해외 항공권] 현금 영수증도 발행 가능 한가요?<span>펼치기</span></td>
                        </tr>
                        <tr class="hide_tr">
                            <th>A.</th>
                            <td>
                                <p>
                                    <b>■ 항공권 현금영수증 발급받기</b>
                                    <br>
                                    1. [ <a href=""> 실시간항공권 > 예약 확인/결제</a> ] 접속
                                    <br>
                                    2. 예약번호 클릭 > 현금 영수증 발행 버튼 클릭
                                </p>
                            </td>
                    </table>
                </div>
            </div>
        </section>
        <section class="main4th_bgBox">
            <div>
                <ul class="container_02">
                    <li><a href="#">〈〈</a></li>
                    <li><a href="#">〈</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">〉</a></li>
                    <li><a href="#">〉〉</a></li>
                </ul>
            </div>
        </section>
        <!-- FOOTER -->
        <?php include "../inc/footer_part.php" ?>
    </div>
</body>

</html>