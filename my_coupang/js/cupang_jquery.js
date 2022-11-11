$(document).ready(function () {
    /* 헤더 / 풋터 불러오기 */
    $("#header").load("../inc/header_part.html");
    $("#footer").load("../inc/footer_part.html");

    /* 검색바 포커스시 슬라이드 */
    $(".search_txt").focus(function () {
        $(".search_bar").animate({ height: "300px" }) // 창 크기
        $(".search_bar_whiteBoard").css({ height: "294px" }) //창크기
        $(".recent_searches").show(); //텍스트 표시
        $(".recent_searches_data").show(); //텍스트 표시
    });

    $(".search_txt").focusout(function () {
        $(".search_bar").stop().css({ height: "48px" }) //창크기
        $(".search_bar_whiteBoard").stop().css({ height: "42px" }) //창크기
        $(".recent_searches").hide(); //텍스트 숨김
        $(".recent_searches_data").hide(); //텍스트 숨김
    });

    /* side menu script */
    /* sticky 의 top value 저장 */
    var currentPosition = parseInt($(".side_menu_sticky").css("top"));
    /* 스크롤 움직일시 사이드 메뉴 이동 */
    $(window).scroll(function () {

        /* 브라우저의 수직 스크롤값 저장 */
        var position = $(window).scrollTop();
        $(".side_menu_sticky").stop().animate({ top: position + currentPosition + "px" }, 700);
        console.log($(".side_menu_sticky").css("top"));
    });

    /* side menu toggle */
    $(".side_menu_sticky_closeBtn").click(function () {
        $(".side_menu_bg").animate({ right: "-500px" });
        $(".side_menu_bg").hide(1000);
        $(".side_menu_sticky_openBtn").show(1000);
    });
    $(".side_menu_sticky_openBtn").click(function () {
        $(".side_menu_bg").animate({ right: "0px" });
        $(".side_menu_bg").show(100);
        $(this).hide(500);
    });

    console.log("document.documentElement.clien : " + document.documentElement.clien);
    console.log(".side_menu_sticky 의 offset : " + $(".side_menu_sticky").offset());
    console.log("currentPosition : " + currentPosition);

    //카테고리 목록 
    var mainCategoryBox = $(".main_category");
    var categoryList1st = $(".main_ctgr_container_1st");
    var categoryList2nd = $(categoryList1st).children();
    var categoryList3rd = $(categoryList1st).find("li");

    //카테고리 show
    //메인 카테고리 hover
    mainCategoryBox.hover(function () {
        $('.main_nav').css({ display: "block" });
        $(categoryList1st).show();
    }, function () {
        $(categoryList1st).hide();
    });

    //1st 목록 hover
    categoryList1st.hover(function () {
        $(this).show();

    }, function () {
        $(this).hide();
    });

    //2nd 목록 hover
    categoryList2nd.hover(function () {
        $(this).children("ul").show();

    }, function () {
        $(this).children("ul").hide();
    });

    //3rd 목록 hover
    categoryList3rd.hover(function () {
        $(this).children("ul").show();
        // 카테고리 선택 히스토리
        $(this).children("a").addClass("add_color");

    }, function () {
        $(this).children("ul").hide();
        // 카테고리 선택 히스토리
        $(this).children("a").removeClass("add_color");

    });

    // 메인 메뉴 hover
    $(".main_menu a").hover(function () {
        $(this).css({
            border: " 1px solid white",
        });
    }, function () {
        $(this).css({ border: "none" })
    });

    /* pager hover change color */
    $(".bx_pager").children("li").hover(function () {
        $(this).children("a").css({ color: "#eca946" });
    }, function () {
        $(this).children("a").css({ color: "black" });
    });
    
});