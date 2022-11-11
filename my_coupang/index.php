<?php
include "inc/session.php"
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠팡</title>
    <!-- init.css -->
    <link rel="stylesheet" type="text/css" href="css/init.css">
    <!-- header.css -->
    <link rel="stylesheet" type="text/css" href="header_style.css">
    <!-- maincategory.css -->
    <link rel="stylesheet" type="text/css" href="css/main_category_list.css">
    <!-- bxslider.css -->
    <link rel="stylesheet" type="text/css" href="src/css/jquery.bxslider.css">


    <!-- javascript -->
    <script type="text/javascript" src="js/jquery/jQuery-3.6.1.js">//제이쿼리</script>
    <script type="text/javascript" src="src/js/jquery.bxslider.js">//bxslider 스크립트</script>
    <script type="text/javascript" src="js/cupang.js">//폼 관련 스크립트 </script>
    <script type="text/javascript" src="js/cupang_jquery.js">//제이쿼리 사용 스크립트</script>

    <script type="text/javascript">
        $(document).ready(function () {
            //bxSlider 
            var bxSlider = $(".bx_slider").bxSlider({
                mode: 'fade',// 가로 방향 수평 슬라이드
                speed: 1000,        // 이동 속도를 설정
                pause: 2500,         // 슬라이드가 보여지는 시간
                pager: true,      // 현재 위치 페이징 표시 여부 설정
                moveSlides: 1,     // 슬라이드 이동시 개수
                infiniteLoop: true, //true | (false, true) | true면 마지막에서 첫번째로 전환 그 반대도 동일, 무한루프
                //slideWidth: 100,   // 슬라이드 너비
                //minSlides: 4,      // 최소 노출 개수
                //maxSlides: 4,      // 최대 노출 개수
                //slideMargin: 5,    // 슬라이드간의 간격
                auto: true,        // 자동 실행 여부
                autoHover: false,   // 마우스 호버시 정지 여부
                controls: false,   // 이전 다음 버튼 노출 여부
                pagerCustom: ".bx_pager", // 페이저

                //onSliderLord: function () { }  //슬라이드 로드 될 때 마다 콜백

                onSlideAfter: function () { //슬라이드 전환 될 때 마다 콜백
                    bxSlider.stopAuto();
                    bxSlider.startAuto();
                },

                onSlideBefore: function () {  // 슬라이드 전환 전 마다 콜백

                    /* 임시 슬라이드 인덱스 표시 업데이트 */
                    var txt1 = document.getElementById("slider_index_num");
                    txt1.textContent = " slideIndex : " + bxSlider.getCurrentSlide() + " / " + ($(".bx_slider").children("div").length - 1);

                    // 백그라운드 색상 변경 함수
                    function changeBgColor(color) {
                        var color = $(".main_images_bg").css({
                            transition: "1s", backgroundColor: color
                        });
                    }

                    // pager colorVal
                    var colorVal = "#eca946";

                    //슬라이드에 따라 백그라운드 색상 변경
                    // 슬라이드 인덱스 값 저장
                    switch (bxSlider.getCurrentSlide()) {

                        /* pager bullet 0~2 */
                        case 0:
                            changeBgColor("#fedd14");
                            /* hide boroder */
                            $(".bx_pager").not(".main_images_cont1").find(".selectBox1").children("span").hide();
                            $(".bx_pager").not(".main_images_cont1").find(".selectBox2").children("span").hide();
                            $(".bx_pager").not(".main_images_cont1").find(".selectBox3").children("span").hide();
                            /* txt color black */
                            $(".bx_pager li").find("a").not(this).css({ color: "black" });
                            /* txt color change */
                            $(".bx_pager li:eq(0)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont1").find(".selectBox1").children("span").show();
                            break;

                        case 1: changeBgColor("#595882");
                            /* txt color change */
                            $(".bx_pager li:eq(0)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont1").find(".selectBox1").children("span").show();
                            $(".main_images_cont1").find(".selectBox2").children("span").show();
                            break;
                        case 2: changeBgColor("#ffead5");
                            /* txt color change */
                            $(".bx_pager li:eq(0)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont1").find(".selectBox1").children("span").show();
                            $(".main_images_cont1").find(".selectBox2").children("span").show();
                            $(".main_images_cont1").find(".selectBox3").children("span").show();

                            break;

                        /* pager bullet 3~5 */
                        case 3: changeBgColor("#d4e8f3");
                            /* hide boroder */
                            $(".bx_pager").not(".main_images_cont2").find(".selectBox1").children("span").hide();
                            $(".bx_pager").not(".main_images_cont2").find(".selectBox2").children("span").hide();
                            $(".bx_pager").not(".main_images_cont2").find(".selectBox3").children("span").hide();
                            /* txt color black */
                            $(".bx_pager li").find("a").not(this).css({ color: "black" });
                            /* txt color change */
                            $(".bx_pager li:eq(1)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont2").find(".selectBox1").children("span").show();

                            break;
                        case 4: changeBgColor("#834fff");
                            /* txt color change */
                            $(".bx_pager li:eq(1)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont2").find(".selectBox1").children("span").show();
                            $(".main_images_cont2").find(".selectBox2").children("span").show();
                            break;
                        case 5: changeBgColor("#e6cdc8");
                            /* txt color change */
                            $(".bx_pager li:eq(1)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont2").find(".selectBox1").children("span").show();
                            $(".main_images_cont2").find(".selectBox2").children("span").show();
                            $(".main_images_cont2").find(".selectBox3").children("span").show();

                            break;

                        /* pager bullet 6~8 */
                        case 6: changeBgColor("#f3c404");
                            /* hide boroder */
                            $(".bx_pager").not(".main_images_cont3").find(".selectBox1").children("span").hide();
                            $(".bx_pager").not(".main_images_cont3").find(".selectBox2").children("span").hide();
                            $(".bx_pager").not(".main_images_cont3").find(".selectBox3").children("span").hide();
                            /* txt color black */
                            $(".bx_pager li").find("a").not(this).css({ color: "black" });
                            /* txt color change */
                            $(".bx_pager li:eq(2)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont3").find(".selectBox1").children("span").show();
                            break;
                        case 7: changeBgColor("#eaeef7");
                            /* txt color change */
                            $(".bx_pager li:eq(2)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont3").find(".selectBox1").children("span").show();
                            $(".main_images_cont3").find(".selectBox2").children("span").show();
                            break;
                        case 8: changeBgColor("#f7ede1");
                            /* txt color change */
                            $(".bx_pager li:eq(2)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont3").find(".selectBox1").children("span").show();
                            $(".main_images_cont3").find(".selectBox2").children("span").show();
                            $(".main_images_cont3").find(".selectBox3").children("span").show();
                            break;

                        /* pager bullet 9~11 */
                        case 9: changeBgColor("#ca8a5c");
                            /* hide boroder */
                            $(".bx_pager").not(".main_images_cont4").find(".selectBox1").children("span").hide();
                            $(".bx_pager").not(".main_images_cont4").find(".selectBox2").children("span").hide();
                            $(".bx_pager").not(".main_images_cont4").find(".selectBox3").children("span").hide();
                            /* txt color black */
                            $(".bx_pager li").find("a").not(this).css({ color: "black" });
                            /* txt color change */
                            $(".bx_pager li:eq(3)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont4").find(".selectBox1").children("span").show();
                            break;
                        case 10: changeBgColor("#dd630e");
                            /* txt color change */
                            $(".bx_pager li:eq(3)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont4").find(".selectBox1").children("span").show();
                            $(".main_images_cont4").find(".selectBox2").children("span").show();
                            break;
                        case 11: changeBgColor("#00acac");
                            /* txt color change */
                            $(".bx_pager li:eq(3)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont4").find(".selectBox1").children("span").show();
                            $(".main_images_cont4").find(".selectBox2").children("span").show();
                            $(".main_images_cont4").find(".selectBox3").children("span").show();
                            break;

                        /* pager bullet 12~14 */
                        case 12: changeBgColor("#000000");
                            /* hide boroder */
                            $(".bx_pager").not(".main_images_cont5").find(".selectBox1").children("span").hide();
                            $(".bx_pager").not(".main_images_cont5").find(".selectBox2").children("span").hide();
                            $(".bx_pager").not(".main_images_cont5").find(".selectBox3").children("span").hide();
                            /* txt color black */
                            $(".bx_pager li").find("a").not(this).css({ color: "black" });
                            /* txt color change */
                            $(".bx_pager li:eq(4)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont5").find(".selectBox1").children("span").show();
                            break;
                        case 13: changeBgColor("#ffefa2");
                            /* txt color change */
                            $(".bx_pager li:eq(4)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont5").find(".selectBox1").children("span").show();
                            $(".main_images_cont5").find(".selectBox2").children("span").show();
                            break;
                        case 14: changeBgColor("#f5fdce");
                            /* txt color change */
                            $(".bx_pager li:eq(4)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont5").find(".selectBox1").children("span").show();
                            $(".main_images_cont5").find(".selectBox2").children("span").show();
                            $(".main_images_cont5").find(".selectBox3").children("span").show();
                            break;

                        /* pager bullet 15~17 */
                        case 15: changeBgColor("#dff1fd");
                            /* hide boroder */
                            $(".bx_pager").not("main_images_cont6").find(".selectBox1").children("span").hide();
                            $(".bx_pager").not("main_images_cont6").find(".selectBox2").children("span").hide();
                            $(".bx_pager").not("main_images_cont6").find(".selectBox3").children("span").hide();
                            /* txt color black */
                            $(".bx_pager li").find("a").not(this).css({ color: "black" });
                            /* txt color change */
                            $(".bx_pager li:eq(5)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont6").find(".selectBox1").children("span").show();
                            break;
                        case 16: changeBgColor("#ebf3ca");
                            /* txt color change */
                            $(".bx_pager li:eq(5)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont6").find(".selectBox1").children("span").show();
                            $(".main_images_cont6").find(".selectBox2").children("span").show();
                            break;
                        case 17: changeBgColor("#fff6b1");
                            /* txt color change */
                            $(".bx_pager li:eq(5)").find("a").css({ color: colorVal });
                            /* show border */
                            $(".main_images_cont6").find(".selectBox1").children("span").show();
                            $(".main_images_cont6").find(".selectBox2").children("span").show();
                            $(".main_images_cont6").find(".selectBox3").children("span").show();
                            break;
                    }
                }
            });
            //bxSlider end

            //bxSlider next page
            $(".main_images_nextbtn").click(function () {
                bxSlider.goToNextSlide();
                return false;
            });
            //넥스트 버튼 hover 일때 자동실행 false

            //next page image change hover
            $(".main_images_nextbtn").hover(function () {
                $(this).css({ background: "url(images/main/main_arrow_right_over_50x75.jpg) center no-repeat" });
            }, function () {
                $(this).css({ background: "url(images/main/main_arrow_right_50x75.jpg) center no-repeat" });
            });

            //bxSlider prev page
            $(".main_images_prewbtn").click(function () {
                bxSlider.goToPrevSlide();
                return false;
            });

            //prev page image change hover
            $(".main_images_prewbtn").hover(function () {
                $(this).css({ background: "url(images/main/main_arrow_left_over_50x75.jpg) center no-repeat" });
            }, function () {
                $(this).css({ background: "url(images/main/main_arrow_left_50x75.jpg) center no-repeat" });
            });

            //bxSlider pause
            $(".main_images_pause").click(function () {
                bxSlider.stopAuto();
                $(this).css({ display: "none" });
                $(".main_images_play").show();
                return false;
            });

            //pause image change hover
            $(".main_images_pause").hover(function () {
                $(this).css({ background: "url(images/main/main_arrow_pause_over_50x75.jpg) center no-repeat" });
            }, function () {
                $(this).css({ background: "url(images/main/main_arrow_pause_50x75.jpg) center no-repeat" });
            });

            //bxSlider play
            $(".main_images_play").click(function () {
                bxSlider.startAuto();
                $(this).css({ display: "none" });
                $(".main_images_pause").show();
                return false;
            });

            //prev page image change hover
            $(".main_images_play").hover(function () {
                $(this).css({ background: "url(images/main/main_arrow_play_over_50x75.jpg) center no-repeat" });
            }, function () {
                $(this).css({ background: "url(images/main/main_arrow_play_50x75.jpg) center no-repeat" });
            });

            /*             //인덱스 값 가져오기
                        bxSlider.click(function () {
            
                            var bxSliderIndex = bxSlider.getCurrentSlide();
                            alert(bxSliderIndex);
                            function changeBxBg(bxSliderIndex) {
            
                                if (bxSliderIndex == 1) {
                                    alert("1입니다");
                                }
                            };
                        }); */

            /* ctg_view cont slide */
            for (var i = 1; i <= $(".ctg_view_contbox").length; i++) {
                var contboxSlider = $(".ctg_view_contbox_slider0" + i + "").bxSlider({
                    mode: "horizontal",// 가로 방향 수평 슬라이드
                    speed: 2000,        // 이동 속도를 설정
                    pause: 4000,         // 슬라이드가 보여지는 시간
                    pager: false,      // 현재 위치 페이징 표시 여부 설정
                    moveSlides: 1,     // 슬라이드 이동시 개수
                    infiniteLoop: true, //true | (false, true) | true면 마지막에서 첫번째로 전환 그 반대도 동일, 무한루프
                    //slideWidth: 100,   // 슬라이드 너비
                    minSlides: 4,      // 최소 노출 개수
                    maxSlides: 4,      // 최대 노출 개수
                    //slideMargin: 5,    // 슬라이드간의 간격
                    auto: false,        // 자동 실행 여부
                    autoHover: false,   // 마우스 호버시 정지 여부
                    controls: true,   // 이전 다음 버튼 노출 여부
                    //pagerCustom: ".bx_pager" // 페이저
                });
            }
            /* ctg_view cont slide btn hover change img */
            /* next btn */
            $(".bx-next").hover(function () {
                $(this).css({ background: "url(images/main/right_icon_over_32x48.jpg) center no-repeat" })
            }, function () {
                $(this).css({ background: "url(images/main/right_icon_32x48.jpg) center no-repeat" });
            });

            /* prev btn */
            $(".bx-prev").hover(function () {
                $(this).css({ background: "url(images/main/left_icon_over_32x48.jpg) center no-repeat" })
            }, function () {
                $(this).css({ background: "url(images/main/left_icon_32x48.jpg) center no-repeat" });
            });

            /* banner slider */
            var bannerBxSlider = $(".banner_bx_slider").bxSlider({
                mode: "fade",// 가로 방향 수평 슬라이드
                speed: 1000,        // 이동 속도를 설정
                pause: 5000,         // 슬라이드가 보여지는 시간
                pager: true,      // 현재 위치 페이징 표시 여부 설정
                moveSlides: 1,     // 슬라이드 이동시 개수
                infiniteLoop: true, //true | (false, true) | true면 마지막에서 첫번째로 전환 그 반대도 동일, 무한루프
                //slideWidth: 100,   // 슬라이드 너비
                //minSlides: 4,      // 최소 노출 개수
                //maxSlides: 4,      // 최대 노출 개수
                //slideMargin: 5,    // 슬라이드간의 간격
                auto: true,        // 자동 실행 여부
                autoHover: false,   // 마우스 호버시 정지 여부
                controls: false,   // 이전 다음 버튼 노출 여부
                //pagerCustom: "", // 페이저

                onSlideBefore: function () { // 슬라이드 전환 전 마다 콜백

                    // 백그라운드 색상 변경 함수
                    function changeBgColor(color) {
                        var color = $(".main_banner_bg").css({
                            transition: "1s", backgroundColor: color
                        });
                    }

                    switch (bannerBxSlider.getCurrentSlide()) {
                        case 0: changeBgColor("#a9ff68");
                            break;
                        case 1: changeBgColor("#fff7b2");
                            break;
                        case 2: changeBgColor("#a8d8fe");
                            break;
                        case 3: changeBgColor("#fff7b2");
                            break;
                    }
                }
            });

            /* 검색어 저장 */
            $(".search_txt").keyup(function () {
                var searchTxt = $(".search_txt").val();
                console.log("검색창 검색어 : " + searchTxt);
            });

            //pager hover
            $(".selectBox1").hover(function () {
                $(this).children("span").show();
            }, function () {
                $(this).children("span").hide();
            });

            $(".selectBox2").hover(function () {
                $(this).parent().prev().find("span").show();
                $(this).children("span").show();
            }, function () {
                $(this).parent().prev().find("span").hide();
                $(this).children("span").hide();
            });

            $(".selectBox3").hover(function () {
                $(this).parent().prev().prev().find("span").show();
                $(this).parent().prev().find("span").show();
                $(this).children("span").show();
            }, function () {
                $(this).parent().prev().prev().find("span").hide();
                $(this).parent().prev().find("span").hide();
                $(this).children("span").hide();
            });


            //오늘의 발견 hover border
            $(".today_big_contbox").find("img").hover(function () {
                $(this).css({ border: "1px solid #50a3d9" });
            }, function () {
                $(this).css({ border: "none" });
            });

            $(".today_samll_contbox").find("a").hover(function () {
                $(this).css({ border: "2px solid #50a3d9" });
            }, function () {
                $(this).css({ border: "none" });
            });

            //상품 페이지 
            //여성패션 핫키워드 hover
            $(".ctg_view_womans_keywordbox li").hover(function () {
                $(this).css({ backgroundColor: "#e170a4" });
                $(this).children("a").css({ color: "#ffffff" });
            }, function () {
                $(this).css({ backgroundColor: "#ffffff" });
                $(this).children("a").css({ color: "#e170a4" });
            });

            //여행 핫키워드 hover
            $(".ctg_view_travel_keywordbox li").hover(function () {
                $(this).css({ backgroundColor: "#00b599" });
                $(this).children("a").css({ color: "#ffffff" });
            }, function () {
                $(this).css({ backgroundColor: "#ffffff" });
                $(this).children("a").css({ color: "#00b599" });
            });

            //남성패션 핫키워드 hover
            $(".ctg_view_mans_keywordbox li").hover(function () {
                $(this).css({ backgroundColor: "#1992df" });
                $(this).children("a").css({ color: "#ffffff" });
            }, function () {
                $(this).css({ backgroundColor: "#ffffff" });
                $(this).children("a").css({ color: "#1992df" });
            });

            //식품 핫키워드 hover
            $(".ctg_view_foods_keywordbox li").hover(function () {
                $(this).css({ backgroundColor: "#e68d1d" });
                $(this).children("a").css({ color: "#ffffff" });
            }, function () {
                $(this).css({ backgroundColor: "#ffffff" });
                $(this).children("a").css({ color: "#e68d1d" });
            });


        });</script>
</head>

<body>
    <div class="wrap">
        <!-- ---------------------- HEADER ------------------------>
        <?php include "../my_coupang/inc/header_part(index).php" ?>
        <!-- ----------------------  MAIN  ------------------------>
        <main>
            <section class="main_images_bg">
                <div class="main_images">
                    <div class="bx_slider">
                        <div><img src="images/main/slide_images/main_image01-1.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image01-2.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image01-3.jpg" alt=""></div>

                        <div><img src="images/main/slide_images/main_image02-1.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image02-2.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image02-3.jpg" alt=""></div>

                        <div><img src="images/main/slide_images/main_image03-1.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image03-2.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image03-3.jpg" alt=""></div>

                        <div><img src="images/main/slide_images/main_image04-1.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image04-2.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image04-3.jpg" alt=""></div>

                        <div><img src="images/main/slide_images/main_image05-1.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image05-2.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image05-3.jpg" alt=""></div>

                        <div><img src="images/main/slide_images/main_image06-1.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image06-2.jpg" alt=""></div>
                        <div><img src="images/main/slide_images/main_image06-3.jpg" alt=""></div>
                    </div>
                    <!-- 임시 슬라이드 인덱스 표시 -->
                    <span id="slider_index_num"></span>
                </div>

            </section>


            <section class="main_images_info">
                <div class="main_images_txt">
                    <h2 class="hidden">중요/기획/이벤트 정보</h2>
                    <ul class="bx_pager">
                        <li class="main_images_cont1"><a href="#">역대급 이벤트</a>
                            <div><a data-slide-index="0" href="#" class="selectBox1"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="1" href="#" class="selectBox2"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="2" href="#" class="selectBox3"><span
                                        class="bottom_border"></span></a></div>
                        </li>
                        <li class="main_images_cont2"><a href="#">놓치면 아쉬운 소식</a>
                            <div><a data-slide-index="3" href="#" class="selectBox1"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="4" href="#" class="selectBox2"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="5" href="#" class="selectBox3"><span
                                        class="bottom_border"></span></a></div>
                        </li>
                        <li class="main_images_cont3"><a href="#">쿠팡 신선 코너</a>
                            <div><a data-slide-index="6" href="#" class="selectBox1"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="7" href="#" class="selectBox2"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="8" href="#" class="selectBox3"><span
                                        class="bottom_border"></span></a></div>
                        </li>
                        <li class="main_images_cont4"><a href="#">딱 일주일 기획전</a>
                            <div><a data-slide-index="9" href="#" class="selectBox1"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="10" href="#" class="selectBox2"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="11" href="#" class="selectBox3"><span
                                        class="bottom_border"></span></a></div>
                        </li>
                        <li class="main_images_cont5"><a href="#">이번 주 HOT 이벤트</a>
                            <div><a data-slide-index="12" href="#" class="selectBox1"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="13" href="#" class="selectBox2"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="14" href="#" class="selectBox3"><span
                                        class="bottom_border"></span></a></div>
                        </li>
                        <li class="main_images_cont6"><a href="#">MD신상품</a>
                            <div><a data-slide-index="15" href="#" class="selectBox1"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="16" href="#" class="selectBox2"><span
                                        class="bottom_border"></span></a></div>
                            <div><a data-slide-index="17" href="#" class="selectBox3"><span
                                        class="bottom_border"></span></a></div>
                        </li>
                    </ul>
                </div>

                <div class="main_images_btn">
                    <span class="main_images_prewbtn"><a href="#">이전 정보 보기</a></span>
                    <span class="main_images_nextbtn"><a href="#">다음 정보 보기</a></span>
                    <span class="main_images_pause"><a href="#">멈춤</a></span>
                    <span class="main_images_play"><a href="#">시작</a></span>
                </div>
            </section>

            <section class="main_today">
                <h3 class="hidden">오늘의 발견</h3>
                <p class="today_txt_big">오늘의 발견</p>
                <p class="today_txt_small">쿠팡이 발견한 가장 핫한 상품!</p>

                <ul class="today_big_contbox">
                    <li class="today_big_cont1"><a href="#"><img src="images/main/large1.jpg" alt=""></a></li>
                    <li class="today_big_cont2"><a href="#"><img src="images/main/large2.jpg" alt=""></a></li>
                </ul>

                <ul class="today_samll_contbox">
                    <li class="today_small_cont1"><a href="#"></a></li>
                    <li class="today_small_cont2"><a href="#"></a></li>
                    <li class="today_small_cont3"><a href="#"></a></li>
                    <li class="today_small_cont4"><a href="#"></a></li>
                </ul>

                <div class="other_ctg_viewmore">
                    <a href="">오늘의 발견 더보기</a>
                </div>
            </section>

            <!-- 메인 배너 -->
            <section class="main_banner_bg">
                <div class="main_banner">
                    <div class="banner_bx_slider">
                        <a href=""><img src="images/main/main_banner01.jpg" alt=""></a>
                        <a href=""><img src="images/main/main_banner02.jpg" alt=""></a>
                        <a href=""><img src="images/main/main_banner03.jpg" alt=""></a>
                        <a href=""><img src="images/main/main_banner04.jpg" alt=""></a>
                    </div>
                </div>

            </section>

            <h2 class="hidden">카테고리 메뉴 한눈에 보기</h2>

            <!-- 여성패션 -->
            <section class="main_ctg_view_bg">
                <h3 class="main_ctg_view_woman_txt">여성패션</h3>
                <div class="ctg_view_womans_keywordbox">
                    <p class="hotkeyword">HOT 키워드</p>
                    <ul>
                        <li class="keywordbox_5word"><a href="#">#반팔티셔츠</li>
                        <li class="keywordbox_3word"><a href="#">#원피스</a></li>
                        <li class="keywordbox_3word"><a href="#">#청바지</a></li>
                        <li class="keywordbox_2word"><a href="#">#샌들</a></li>
                        <li class="keywordbox_3word"><a href="#">#에코백</a></li>
                    </ul>
                    <div class="ctg_view_womans_viewall"><a href="#">전체보기 ></a></div>
                </div>

                <div class="ctg_view_contbox">
                    <div class="ctg_view_contbox_slider01">
                        <!-- slide 1st page -->
                        <ul>
                            <li class="ctg_view_woman_cont1">
                                <a href=""><img src="images/main/S1.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">77우먼스 여성 하이클래스 셔츠 쉬폰혼방 롱셔츠 상의</a></p>
                                <p class="cont_price">25,900원</p>
                                <p class="cont_rck_icn">로켓배송&nbsp;</p>
                                <p class="cont_grade3">별점3</p>
                                <p class="cont_cmt">(27개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>

                            <li class="ctg_view_woman_cont2">
                                <a href=""><img src="images/main/S2.jpg" alt=""></a>
                                <p class="cont_title"><a href="">[VEDI VERO] 베디베로 VE706 BEC 명품 선글라스</a></p>
                                <p class="cont_price">25,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(83개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>

                            <li class="ctg_view_woman_cont3">
                                <a href=""><img src="images/main/S3.jpg" alt=""></a>
                                <p class="cont_title"><a href="">심플리앤 여성용 라피아 썬캡</a></p>
                                <p class="cont_price">25,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade1">별점1점</p>
                                <p class="cont_cmt">(11개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_woman_cont4">
                                <a href=""><img src="images/main/S4.jpg" alt=""></a>
                                <p class="cont_title"><a href="">대박난박양 체리쉬 와이드 슬랙스</a></p>
                                <p class="cont_price">25,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(27개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                        </ul>

                        <!-- slide 2nd page -->
                        <ul>
                            <li class="ctg_view_woman_cont1">
                                <a href=""><img src="images/main/S5.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">대박난박양 하이웨스트 라인 스키니진</a></p>
                                <p class="cont_price">27,800원</p>
                                <p class="cont_rck_icn">로켓배송&nbsp;</p>
                                <p class="cont_grade4">별점4</p>
                                <p class="cont_cmt">(292개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">모레 9/2(금) 도착보장</p>
                            </li>

                            <li class="ctg_view_woman_cont2">
                                <a href=""><img src="images/main/S6.jpg" alt=""></a>
                                <p class="cont_title"><a href="">오브원 피란체 로즈 레이스 초경량 2단 양산</a></p>
                                <p class="cont_price">24,500원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(16개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>

                            <li class="ctg_view_woman_cont3">
                                <a href=""><img src="images/main/S7.jpg" alt=""></a>
                                <p class="cont_title"><a href="">이너스유 여성용 기모레깅스 유발 2p
                                    </a></p>
                                <p class="cont_price">11,800원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(25개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_woman_cont4">
                                <a href=""><img src="images/main/S8.jpg" alt=""></a>
                                <p class="cont_title"><a href="">대박난박양 체리쉬 와이드 슬랙스</a></p>
                                <p class="cont_price">25,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(27개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                        </ul>

                        <!-- slide 3rd page -->
                        <ul>
                            <li class="ctg_view_woman_cont1">
                                <a href=""><img src="images/main/S9.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">ZARA Zara 격자 무늬 버킷 가방 핸드백 크로스백+선물</a></p>
                                <p class="cont_price">46,650원</p>
                                <p class="cont_rck_icn">로켓배송&nbsp;</p>
                                <p class="cont_grade2">별점2</p>
                                <p class="cont_cmt">(6개)</p>
                            </li>

                            <li class="ctg_view_woman_cont2">
                                <a href=""><img src="images/main/S10.jpg" alt=""></a>
                                <p class="cont_title"><a href="">[율미아스탭] 스모킹플리츠원피스_S2F1OP3031</a></p>
                                <p class="cont_price">37,010원</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>

                            <li class="ctg_view_woman_cont3">
                                <a href=""><img src="images/main/S11.jpg" alt=""></a>
                                <p class="cont_title"><a href="">K2 스트레치 장갑</a></p>
                                <p class="cont_price">22,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(2,542개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_woman_cont4">
                                <a href=""><img src="images/main/S12.jpg" alt=""></a>
                                <p class="cont_title"><a href="">도씨 피치기모 싱글라인 긴팔 카라 잠옷 상하의 세트 D-9903</a></p>
                                <p class="cont_price">19,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(77개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ctg_view_prvbtn">
                    <a href="">이전 상품보기</a>
                </div>

                <div class="ctg_view_nxtbtn">
                    <!-- <a href="">다음 상품보기</a> -->
                </div>
            </section>

            <!-- 여행 -->
            <section class="main_ctg_view_bg">
                <h3 class="main_ctg_view_travel_txt">여행</h3>
                <div class="ctg_view_travel_keywordbox">
                    <p class="hotkeyword">HOT 키워드</p>
                    <ul>
                        <li class="keywordbox_4word"><a href="#">#제주호텔</li>
                        <li class="keywordbox_6word"><a href="#">#캠핑&글래핑</a></li>
                        <li class="keywordbox_4word"><a href="#">#워터파크</a></li>
                        <li class="keywordbox_6word"><a href="#">#제주도항공권</a></li>
                        <li class="keywordbox_4word"><a href="#">#신축펜션</a></li>
                    </ul>
                    <div class="ctg_view_womans_viewall"><a href="#">전체보기 ></a></div>

                </div>

                <div class="ctg_view_contbox">
                    <div class="ctg_view_contbox_slider02">
                        <!-- slide 1st page -->
                        <ul>
                            <li class="ctg_view_travel_cont1">
                                <a href=""><img src="images/main/t1.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">★유/소아 가족단위 강력추천★ 파크마린호텔(키즈카페 2개 보유)</a></p>
                                <p class="cont_price">72,000</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade3">별점3</p>
                                <p class="cont_cmt">(27개)</p>
                            </li>
                            <li class="ctg_view_travel_cont2">
                                <a href=""><img src="images/main/t2.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">신라 스테이 광화문</a></p>
                                <p class="cont_price">129,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(231개)</p>
                            </li>
                            <li class="ctg_view_travel_cont3">
                                <a href=""><img src="images/main/t3.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">골목_먹방 투어<br>(차이나타운 & 티옹바루)</a></p>
                                <p class="cont_price">49,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(55개)</p>
                            </li>
                            <li class="ctg_view_travel_cont4">
                                <a href=""><img src="images/main/t4.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">충청서천 별빛 정원 펜션</a></p>
                                <p class="cont_price">25,800원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(115개)</p>
                            </li>
                        </ul>
                        <!-- slide 2nd page -->
                        <ul>
                            <li class="ctg_view_travel_cont1">
                                <a href=""><img src="images/main/t5.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[강원 고성]<br>설악 포유리조트</a></p>
                                <p class="cont_price">59,700</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade3">별점3</p>

                            </li>
                            <li class="ctg_view_travel_cont2">
                                <a href=""><img src="images/main/t6.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[제주/서귀포시]<br>성산 아름다운리조트</a></p>
                                <p class="cont_price">90,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(56개)</p>
                            </li>
                            <li class="ctg_view_travel_cont3">
                                <a href=""><img src="images/main/t7.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[광주광역시]<br>더존 호텔</a></p>
                                <p class="cont_price">66,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(55개)</p>
                            </li>
                            <li class="ctg_view_travel_cont4">
                                <a href=""><img src="images/main/t8.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[태안]<br>만리포 호텔</a></p>
                                <p class="cont_price">50,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(43개)</p>
                            </li>
                        </ul>

                        <!-- slide 3rd page -->
                        <ul>
                            <li class="ctg_view_travel_cont1">
                                <a href=""><img src="images/main/t9.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[화성]<br>신라스테이 동탄</a></p>
                                <p class="cont_price">14,800</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade4">별점4</p>
                                <p class="cont_cmt">(21개)</p>
                            </li>
                            <li class="ctg_view_travel_cont2">
                                <a href=""><img src="images/main/t10.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[보성]<br>녹차리조트</a></p>
                                <p class="cont_price">65,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_cmt">(8개)</p>
                            </li>
                            <li class="ctg_view_travel_cont3">
                                <a href=""><img src="images/main/t11.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[서귀포]<br>베니키아 중문호텔</a></p>
                                <p class="cont_price">90,900원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(25개)</p>
                            </li>
                            <li class="ctg_view_travel_cont4">
                                <a href=""><img src="images/main/t12.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">[정선]<br>하이원리조트 마운틴/힐콘도</a></p>
                                <p class="cont_price">97,000원</p>
                                <p>&nbsp;</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(33개)</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ctg_view_prvbtn">
                    <a href="">이전 상품보기</a>
                </div>

                <div class="ctg_view_nxtbtn">
                    <a href="">다음 상품보기</a>
                </div>
            </section>


            <!-- 남성패션 -->

            <section class="main_ctg_view_bg">
                <h3 class="main_ctg_view_mans_txt">남성패션</h3>
                <div class="ctg_view_mans_keywordbox">
                    <p class="hotkeyword">HOT 키워드</p>
                    <ul>
                        <li class="keywordbox_5word"><a href="#">#반팔티셔츠</li>
                        <li class="keywordbox_3word"><a href="#">#슬리퍼</a></li>
                        <li class="keywordbox_3word"><a href="#">#반바지</a></li>
                        <li class="keywordbox_4word"><a href="#">#리넨팬츠</a></li>
                        <li class="keywordbox_4word"><a href="#">#카드지갑</a></li>
                        <li class="keywordbox_2word"><a href="#">#자켓</a></li>
                    </ul>
                    <div class="ctg_view_womans_viewall"><a href="#">전체보기 ></a></div>
                </div>

                <div class="ctg_view_contbox">
                    <div class="ctg_view_contbox_slider03">
                        <!-- slide 1st page -->
                        <ul>
                            <li class="ctg_view_mans_cont1">
                                <a href=""><img src="images/main/m1.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">BSQT 791 코벤트리 7홀 더비 워커 매트블랙
                                    </a></p>
                                <p class="cont_price">39,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade4">별점4</p>
                                <p class="cont_cmt">(157개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont2">
                                <a href=""><img src="images/main/m2.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">남성 쁘띠 스카프</a></p>
                                <p class="cont_price">10,800원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade2">별점2점</p>
                                <p class="cont_cmt">(87개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont3">
                                <a href=""><img src="images/main/m3.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">스타일에스 남자 쿨스킨 플리츠 트임 밴딩 와이드 팬츠 여름 아이스 바지</a></p>
                                <p class="cont_price">34,800원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade1">별점1점</p>
                                <p class="cont_cmt">(11개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">내일 9/2(금) 새벽 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont4">
                                <a href=""><img src="images/main/m4.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">미꼬장 남자 와이드 팬츠 빅사이즈 여름 조거 볼륨 항아리 전체스판 밴딩</a></p>
                                <p class="cont_price">21,500원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(48개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">내일 9/2(금) 새벽 도착보장</p>
                            </li>
                        </ul>
                        <!-- slide 2nd page -->
                        <ul>
                            <li class="ctg_view_mans_cont1">
                                <a href=""><img src="images/main/m5.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">핏콕 남성용 겨울 슈퍼스판 기모본딩 면바지
                                    </a></p>
                                <p class="cont_price">23,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade4">별점4</p>
                                <p class="cont_cmt">(112개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont2">
                                <a href=""><img src="images/main/m6.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">남자 디스트로이드 워싱 스판 배색 데님 청바지</a></p>
                                <p class="cont_price">34,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont3">
                                <a href=""><img src="images/main/m7.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">Made in Korea 남여공용 원형 천연가죽 볼륨밴드(Brown bend) 손목시계
                                        시계제조
                                        제작업체 코와치시계(kowatch)</a></p>
                                <p class="cont_price">38,500원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                            </li>
                            <li class="ctg_view_mans_cont4">
                                <a href=""><img src="images/main/m8.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">투제이글로벌 남여공용 M~2XL 프린팅 반팔 티셔츠 3color</a></p>
                                <p class="cont_price">14,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(8개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">내일 9/2(금) 새벽 도착보장</p>
                            </li>
                        </ul>

                        <!-- slide 3rd page -->
                        <ul>
                            <li class="ctg_view_mans_cont1">
                                <a href=""><img src="images/main/m9.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">남성용 카카오프렌즈 피치기모 잠옷 상하 세트</a></p>
                                <p class="cont_price">27,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade5">별점5</p>
                                <p class="cont_cmt">(60개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont2">
                                <a href=""><img src="images/main/m10.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">벤힛 루니툰 오버핏 특양면 맨투맨 WBRTOT2005D</a></p>
                                <p class="cont_price">19,730원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(31개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_mans_cont3">
                                <a href=""><img src="images/main/m11.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">(블랙야크)<br>공용 고어텍스 인피니움 방풍 야상점퍼 B템페스트다운자켓</a></p>
                                <p class="cont_price">199,000원</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(11개)</p>
                            </li>
                            <li class="ctg_view_mans_cont4">
                                <a href=""><img src="images/main/m12.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">써머지프 써머지프 청바지 남 스트레이트 핏 스판</a></p>
                                <p class="cont_price">61,000원</p>
                                <p class="cont_grade2">별점2점</p>
                                <p class="cont_cmt">(7개)</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ctg_view_prvbtn">
                    <a href="">이전 상품보기</a>
                </div>

                <div class="ctg_view_nxtbtn">
                    <a href="">다음 상품보기</a>
                </div>
            </section>

            <!-- 식품 -->
            <section class="main_ctg_view_bg">
                <h3 class="main_ctg_view_foods_txt">식품</h3>
                <div class="ctg_view_foods_keywordbox">
                    <p class="hotkeyword">HOT 키워드</p>
                    <ul>
                        <li class="keywordbox_4word"><a href="#">#저탄고지</li>
                        <li class="keywordbox_3word"><a href="#">#비타민</a></li>
                        <li class="keywordbox_3word"><a href="#">#간편식</a></li>
                        <li class="keywordbox_3word"><a href="#">#생고기</a></li>
                        <li class="keywordbox_2word"><a href="#">#야식</a></li>
                        <li class="keywordbox_4word"><a href="#">#다이어트</a></li>
                    </ul>
                    <div class="ctg_view_womans_viewall"><a href="#">전체보기 ></a></div>
                </div>

                <div class="ctg_view_contbox">
                    <div class="ctg_view_contbox_slider04">
                        <!-- slide 1stpage -->
                        <ul>
                            <li class="ctg_view_foods_cont1">
                                <a href=""><img src="images/main/f1.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">알레 맥스 콘드로이친 1200</a></p>
                                <p class="cont_price">62,500원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade5">별점5</p>
                                <p class="cont_cmt">(2,319개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_foods_cont2">
                                <a href=""><img src="images/main/f2.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">캐슈넛 햇 (생캐슈넛) 1kg A급 정품 최근통관 햇제품</a></p>
                                <p class="cont_price">15,900원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(565개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">내일 9/2(금) 도착보장</p>
                            </li>
                            <li class="ctg_view_foods_cont3">
                                <a href=""><img src="images/main/f3.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">JW중외제약 프리미엄 리얼메디 보스웰리아 마스터</a></p>
                                <p class="cont_price">35,500원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(232개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">내일 9/2(금) 도착보장</p>
                                <span><img src="images/main/cold_icon_43x50.png" alt=""></span>
                            </li>
                            <li class="ctg_view_foods_cont4">
                                <a href=""><img src="images/main/f4.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">만전김 미니언즈 한끼한포 스틱 김자반</a></p>
                                <p class="cont_price">8,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(1,119개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                        </ul>

                        <!--slide 2nd page -->
                        <ul>
                            <li class="ctg_view_foods_cont1">
                                <a href=""><img src="images/main/f5.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">바다포차 구룡포 살짝 반건조 오징어 다이아몬드 피데기 500g (5~8미)</a></p>
                                <p class="cont_price">9,900원</p>
                                <p class="cont_grade5">별점5</p>
                                <p class="cont_cmt">(1,230개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_foods_cont2">
                                <a href=""><img src="images/main/f6.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">넛츠랩 오리지널 블루베리 견과</a></p>
                                <p class="cont_price">17,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(145개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                            </li>
                            <li class="ctg_view_foods_cont3">
                                <a href=""><img src="images/main/f7.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">넛츠팜 피칸</a></p>
                                <p class="cont_price">12,950원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade3">별점3점</p>
                                <p class="cont_cmt">(1,932개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                            </li>
                            <li class="ctg_view_foods_cont4">
                                <a href=""><img src="images/main/f8.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">주일 40년 외길 중부시장 김종풍 디포리 (냉동)</a></p>
                                <p class="cont_price">9,900원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(1,119개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                <span><img src="images/main/cold_icon_43x50.png" alt=""></span>
                            </li>
                        </ul>

                        <!--slide 3rd page -->
                        <ul>
                            <li class="ctg_view_foods_cont1">
                                <a href=""><img src="images/main/f9.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">풀무원다논 그릭 요거트 달지않은 플레인</a></p>
                                <p class="cont_price">4,840원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade5">별점5</p>
                                <p class="cont_cmt">(29,430개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_foods_cont2">
                                <a href=""><img src="images/main/f10.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">파우더쉐프 볶음맛능가루 5p</a></p>
                                <p class="cont_price">13,900원</p>
                                <p class="cont_rck_icn">로켓배송</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(355개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                            </li>
                            <li class="ctg_view_foods_cont3">
                                <a href=""><img src="images/main/f11.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">포스트 그래놀라 블루베리 시리얼</a></p>
                                <p class="cont_price">5,751원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade5">별점5점</p>
                                <p class="cont_cmt">(5,032개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                            </li>
                            <li class="ctg_view_foods_cont4">
                                <a href=""><img src="images/main/f12.jpg" alt=""></a>
                                <p class="cont_title"><a href="#">해선생 포항시 인증 바로먹는 구룡포 붉은대게</a></p>
                                <p class="cont_price">41,400원</p>
                                <p class="cont_rckfresh_icn">로켓후레쉬</p>
                                <p class="cont_grade4">별점4점</p>
                                <p class="cont_cmt">(1,102개)</p>
                                <p class="cont_shpping">새벽배송가능</p>
                                <p class="cont_shpping_arrival">오늘 9/1(목) 도착보장</p>
                                <span><img src="images/main/cold_icon_43x50.png" alt=""></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ctg_view_prvbtn">
                    <a href="">이전 상품보기</a>
                </div>

                <div class="ctg_view_nxtbtn">
                    <a href="">다음 상품보기</a>
                </div>
            </section>

            <div class="other_ctg_viewmore">
                <a href="">다른 카테고리 더보기</a>
            </div>
        </main>

        <!-- ---------------------- FOOTER ------------------------>
        <?php include "../my_coupang/inc/footer_part.php" ?>
    </div>
</body>

</html>