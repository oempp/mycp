

///* 메인 카테고리 메뉴 마우스 오버 */
//function mouseOver1st() {
//    var showList = document.getElementById("ctgr_1stList");
//    showList.style.visibility = "visible";
//    //alert("showList");
//}
//
//function mouseOut1st() {
//    var hideList = document.getElementById("ctgr_1stList");
//    hideList.style.visibility = "hidden";
//    //alert("hideList");
//}
//
//
//
///* 1st 리스트 마우스 오버 */
//function mouseOut1st() {
//    var showList = document.getElementById("ctgr_1stList");
//    showList.style.visibility = "visible";
//    //alert("1stShowList");
//}
//function mouseOut1st() {
//    var showList = document.getElementById("ctgr_1stList");
//    showList.style.visibility = "hidden";
//    //alert("1stHideList");
//}

/* signup_par1 */






// 비밀번호 값이 일치하는지 실시간 체크
/* function checkPwd() {
    if (user_info_chkPwd.value.lenth > MIN_NUM_LENGTH){
        txt.textContent = "일치하지 않습니다";
        user_info_id.focus();
        return false;
    }
}
 */


/* form 양식 검사 */
function checkForm() {
    //숫자만 나열인지 검사 // 정규식 <-검색해서 사용
    var CHECK_NUM = /^[0-9]+$/g;

    const MAX_STRING_LENGTH = 20;
    const MIN_STRING_LENGTH = 8;
    const MAX_NUM_LENGTH = 20;
    const MIN_NUM_LENGTH = 8;

    var user_info_id = document.getElementById("user_info_id");
    var user_ck_id = document.getElementById("user_ck_id");
    var user_info_pwd = document.getElementById("user_info_pwd");
    var user_info_chkPwd = document.getElementById("user_info_chkPwd");
    var user_info_name = document.getElementById("user_info_name");
    var user_info_birth = document.getElementById("user_info_birth");
    var user_info_mobile = document.getElementById("user_info_mobile");


    var user_email1 = document.getElementById("user_email1");
    var apply = document.getElementById("apply");


    /* 아이디 */
    // 값이 없을 때
    if (!user_info_id.value) {
        var txt = document.getElementById("dsp");
        txt.textContent = "아이디는 이메일 형식으로만 입력 할 수 있습니다.";
        txt.className = "redTxt";
        user_info_id.focus();
        return false;
    }

    //아이디 값 이메일 형식이 아닐때 
    if (!checkEmail(user_info_id.value)) {
        var txt = document.getElementById("dsp");
        txt.textContent = "아이디는 이메일 형식으로만 입력 할 수 있습니다.";
        txt.className = "redTxt";
        user_info_id.focus();
        return false;
    }

    /* 비밀번호 */
    // 값이 없을 때
    if (!user_info_pwd.value) {
        var txt = document.getElementById("dsp_pwd");
        txt.textContent = "비밀번호를 입력하세요.";
        txt.className = "redTxt";
        user_info_pwd.focus();
        return false;
    }
    // 비밀번호 범위가 4자리 미만 16자리 초괴알때
    if (user_info_pwd.value.length <= MIN_NUM_LENGTH) {
        var txt = document.getElementById("dsp_pwd");
        txt.textContent = "비밀번호는 8자리 이상 20자리이하로 입력하세요.";
        txt.className = "redTxt";
        user_info_pwd.focus();
        return false;
    }
    if (user_info_pwd.value.length >= MAX_NUM_LENGTH) {
        var txt = document.getElementById("dsp_pwd");
        txt.textContent = "비밀번호는 8자리 이상 20자리이하로 입력하세요.";        
        txt.className = "redTxt";
        user_info_pwd.focus();
        return false;
    }
    //비밀번호 확인이 일치 하지 않을 때
    if (user_info_pwd.value != user_info_chkPwd.value) {
        var txt = document.getElementById("dsp_ck_pwd");
        txt.textContent = "비밀번호가 일치하지 않습니다.";
        txt.className = "redTxt";
        user_info_chkPwd.focus();
        return false;
    }

    /* 이름 */
    // 값이 없을때
    if (!user_info_name.value) {
        var txt = document.getElementById("dsp_name");
        txt.textContent = "사용자 이름을 입력하세요.";
        txt.className = "redTxt";
        user_info_name.focus();
        return false;
    }  

    
    /* 생년월일 */
    // 값이 없을때
    if (!user_info_birth.value) {
        var txt = document.getElementById("dsp_birth");
        txt.textContent = "생년월일을 입력하세요.";
        txt.className = "redTxt";
        user_info_birth.focus();
        return false;
    }

    /* 휴대폰 번호 */
    // 값이 없을때
    if (!user_info_mobile.value) {
        var txt = document.getElementById("dsp_mobile");
        txt.textContent = "휴대폰 번호를 입력하세요.";
        txt.className = "redTxt";
        user_info_mobile.focus();
        return false;
    }
    //12자리보다 클때
    if (user_info_mobile.value.length > 12) {
        var txt = document.getElementById("dsp_mobile");
        txt.textContent = "12자리 이하로 입력하세요.";
        txt.className = "redTxt";
        user_info_mobile.focus();
        return false;
    }

    /* 약관동의 */
    var apply_all = document.getElementById("apply_all");
    if (!apply_all.checked) {
        var txt = document.getElementById("err_aplly");
        txt.textContent = "필수 항목에 모두 동의해주세요.";
        txt.className = "redTxt";
        apply_all.focus();
        return false;
    }

    /* 필수 약관동의(1~5옵션)가 안되어 있을때 */
    var apply_opt1 = document.getElementById("apply_opt1");
    var apply_opt2 = document.getElementById("apply_opt2");
    var apply_opt3 = document.getElementById("apply_opt3");
    var apply_opt4 = document.getElementById("apply_opt4");
    var apply_opt5 = document.getElementById("apply_opt5");
    if (!apply_opt1.checked || !apply_opt2.checked || !apply_opt3.checked || !apply_opt4.checked || !apply_opt5.checked) {
        var txt = document.getElementById("err_aplly");
        txt.textContent = "필수 항목에 모두 동의해주세요.";
        txt.className = "redTxt";
        return false;
    }
}
/* form 양식 검사 end */

//var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
//이메일 형식으로 검사
function checkEmail(_str) {
    var CHECK_TYPE_EMAIL = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
    if (!CHECK_TYPE_EMAIL.test(_str)) {
        return false;
    }
    else return true;
}

/* 전체 체크 하기 */
function checkApply(apply_all) {
    const boxed = document.getElementsByName("ck");
    boxed.forEach((checkbox) => {
        checkbox.checked = apply_all.checked;
    })
}




