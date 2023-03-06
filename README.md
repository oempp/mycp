# 웹 퍼블리싱 프로젝트
## Link : http://tws1.dothome.co.kr/my_coupang/
# 웹사이트 리뉴얼 해보기

### 웹 퍼블리싱 기획 
    
웹프로그래밍 기초학습한 후 실제 이용되는 웹사이트처럼 만들어 보고자 프로젝트를 기획했습니다.<br>
사이트를 정한 뒤 사이트를 리뉴얼 하는 방향으로 정했고 여러가지 기능구현을 고려해 쇼핑몰 관련사이트로 정하고 디자인 시안을 만들고 코딩을 통해 디자인을 구현하고 나아가 서버 연동 및 배포까지 염두하고 작업을 진행했습니다.

### 웹 퍼블리싱 설계

**사이트 선정**
  
메인사이트는 '쿠팡'으로 선정했습니다. 자주 이용하는 사이트였고 사용하면서 디자인적으로나 기능적으로 바뀌었으면 하는 부분이 있어 채택을했고 방식은 평소에 깔끔하다고 생각됐던 '신세계쇼핑포털 SSG' 사이트를 타겟사이트정하고 메이사이트를 타겟사이트처럼 리뉴얼 하는 방향으로 정했습니다.

### 기술스택

<p>
<img src="https://img.shields.io/badge/html5-E34F26?style=for-the-badge&logo=html5&logoColor=white"> 
<img src="https://img.shields.io/badge/css-1572B6?style=for-the-badge&logo=css3&logoColor=white">
<img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=Bootstrap&logoColor=white">
<img src="https://img.shields.io/badge/javascript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
<img src="https://img.shields.io/badge/jquery-0769AD?style=for-the-badge&logo=jquery&logoColor=white">
<img src="https://img.shields.io/badge/github-181717?style=for-the-badge&logo=github&logoColor=white">
</p>
    
<br>
<br>
<br>
<br>
<br>
               
## 디자인 시안  
    
<p align="center">   
<img src="https://user-images.githubusercontent.com/111415080/220217301-bad08c99-5630-43bb-b0c4-0da742ccc742.jpg">
</p>

디자인 시안은 메인 페이지 와 여러 서브페이지로 구성을 했습니다. 서브페이지로는 로그인, 회원가입, 마이메뉴, 물품 상세페이지, 고객센터로 구상을했고 포토샵과 일러스트로 작업을 진했습니다.


쇼핑몰에서 중요하다고 생각 되는 부분이 검색창과 메인이미지라고 생각하기에 처음 보이는 화면에서 비중을 많이 뒀습니다.
    
상품 검색을 위한 검색바를 최상단에 배치해 한 눈에 들어오도록 했고 그라데이션 테두리 효과를 적용했니다.
    
메인이미지로는 이벤트나 기획전 상품할인등 중요소식을 볼 수 있도록 배치했습니다.
 
카테고리를 세분화 하여 3개의 상품목록으로 디자인했고 하단부분엔 카테고별 상품들이 노출되도록 설계했습니다.




서브페이지들의 헤더와 풋터 부분은 상시 보일 수 있게 배치하고 안쪽 내용 부분만 다르게 꾸며봤습니다.
    
</p>

**마크업**

![Untitled-1](https://user-images.githubusercontent.com/111415080/219902115-922c5b96-f43e-439b-b0f3-9db6f79f320b.jpg)

디자인 작업 후 마크업 작업입니다.

카테고리 목록이나 이미지 배치, 헤더 및 풋터영역 구분등 섹션을 나누어서 작업을 하고 후에 CSS 디자인 작업을 진행합니다.

<br>
<br>
<br>
<br>
<br>

## 인터랙션

<p align="center">    
<img src="https://user-images.githubusercontent.com/111415080/219902918-3311b613-dc09-4ae5-9ba0-685d6595dabf.gif">
</p>

> 검색바는 쇼핑몰에서 중요한 부분이기에 강조효과로 테두리에 그라데이션 효과를 적용했습니다.<br>
> 테두리 색상은 쿠팡로고에 맞는 색상으로 구성을 했고 검색바 포커스 시 검색창이 커지면서 최근 검색내역등을 확인할 수 있게했습니다.

<p align="center">  
<img src="https://user-images.githubusercontent.com/111415080/219903133-a3404eeb-4010-4d2e-b0dd-2df1ca7f89b4.gif">
</p>

> 카테고리 메뉴는 3단 리스트로 구성을하고 마우스hover로 인한 하위 리스트 노출 및 현재 선택되어있는 리스트를 알아볼 수 있게 검은색으로 배경처리 했습니다.

<p align="center">  
<img src="https://user-images.githubusercontent.com/111415080/219972689-cfd85546-2b26-475c-9bc9-ac90e6dfa85c.gif" width="200">
</p>

> 사이드 네비게이션은 스크롤에 움직임에 따라 따라다니도록 했습니다. 불필요한 경우에는 화면 맨 우측사이드에 작은 아이콘형태로 고정되어집니다.

<p align="center"> 
<img src="https://user-images.githubusercontent.com/111415080/219972705-b7436a85-7d5c-4c8f-a090-eae2b84d8e5a.gif">
</p>

> 고객센터 페이지에서는 사용자들이 자주 찾는 질문들을 리스트 형태로 구현을 했습니다. 
>
> 먼저 질문 유형을 선택하면 유형에 맞는 질문 리스트를 보여주게 되고
>
> 질문 리스트를 클릭하게되면 그에 맞는 답변리스트가 아래로 펼쳐지면서 보여지게 됩니다.
>
> 다른 리스트를 클릭하게되면 전에 펼쳐져 있던 리스트는 다시 감춰지고 클릭한 질문의 답변 리스트가 펼쳐집니다.

<br>
<br>
<br>
<br>
<br>

## 데이터 연동

> **1. DB 와 table 설계**
>
> 웹페이지의 디자인과 인터랙션 작업 후 로그인 및 회원가입, 상품정보 및 댓글 기능을 구현하고자 DB 구축 과정을 정리해봤습니다.
>
> 웹페이지에서 쓰일 데이터들로는 유저의 정보, 상품의 정보, 게시판 및 댓글 정보로 구성을 하고 table 작성을 진행했습니다.

<p align="center">
<img src="https://user-images.githubusercontent.com/111415080/219975901-18e3559e-605f-4d98-a730-5359d66a2255.png">
</p>

> 유저의 개인정보를 담을 테이블입니다. 회원 가입시 고유 인덱스번호 부여 아이디의 길이 및 비밀번호 길이의 제약등 
>
> 실제 사용되고있는 회원가입폼처럼 설계를 했습니다. 
>
> 회원가입 시 필수로 입력해야하는 정보 및 나중에 입력가능한 정보로 구분을 했고 회원가입 후 개인정보 수정도 가능하도록 했습니다.
			
<p align="center">	
<img src="https://user-images.githubusercontent.com/111415080/219975927-a5144ddf-900c-4494-952d-bf2fa56a27ed.png">
</p>

> 상품 정보로는 상세 분류가 가능하도록 카테고리 항목을 추가했고 상품가격 판매여부등으로 설계했습니다.
				
<p align="center">	
<img src="https://user-images.githubusercontent.com/111415080/219975945-2d04d617-4395-42e3-bce4-bd4370b9e672.png">
</p>

> 게시판 및 댓글은 작성자 정보와 댓글정보 시간등 간략히 구성을 하고 해당 페이지에서 수정 및 삭제기능을 쓸 수 있도록했습니다.

<br>
<br>
<br>
<br>
<br>

> **2. DB 와 table 생성**
>
> 웹 서버 관리프로그램으로 **xampp**를 사용하였고 **PHP**, **Apache**, **MariaDB**, **MySQL**을 사용하여 웹 서버 구축을 했습니다.
>
> 웹사이트 배포까지 염두해두고 작업을 했고 로컬호스트에서 DB 연동이 되는지 디버깅합니다.

<p align="center">	
<img src="https://user-images.githubusercontent.com/111415080/219978703-42de0a25-df7b-4f26-aad7-c560596d7300.png">
</p>
<p align="center">
table 생성 테스트
</p>

<br>
<br>
<br>
<br>
<br>

> **3. 웹페이지와 DB 접속**
>
> 먼저 회원가입 페이지에서 유저 정보를 DB에 보내는 작업을 했습니다.
>
> 연동을 위해 localhost DB에 접속합니다.

```php
<?php
$dbcon = mysqli_connect("localhost","root","", "front") or die("접속 실패");
mysqli_set_charset($dbcon, "utf8");
?>
```

<br>
<br>
<br>
<br>
<br>

> **4. 쿼리문 작성 및 데이터 전송**
>
> DB 접속 완료 후 회원가입페이지에서 유저 데이터를 입력하고 submit을 실행하면 바로 DB에 저장하는 것이 아니라 중간 처리페이지에서 체크를 하고난 뒤에 DB에 저장합니다.
> 회원가입 페이지의 form요소의 action링크에 insert.php의 중간처리 페이지로 데이터를 넘기고 거기서 데이터들이 맞게 들어왔는지 쿼리문 체크를하고 오류가 있을 시 전페이지로
> history.back 합니다.
> 서버와 연동되는 모든 페이지는 처리페이지에서 쿼리문 작성 및 오류체크를하고 완료된 상태에서만 서버로 보냅니다. form태그에서 데이터를 바로 보내주게 되면 한 페이지내에서
> 쿼리작성과 오류체크를 모두 진행해야하고 처리과정에서 생기는 딜레이로 인해 데이터 누락이나 중복 입력이 될 가능성이 있습니다.

```php
<?php 
//db 접속 하는 php 불러오기
include "../inc/dbcon.php";

//변수 선언 및 값 저장
$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];
$u_chk_pwd = $_POST["u_chk_pwd"];
$u_name = $_POST["u_name"];
$u_gender = $_POST["u_gender"];
$u_birth = $_POST["u_birth"];
$u_mobile = $_POST["u_mobile"];
$u_email = $_POST["u_email"]."@".$_POST["u_email2"];
$u_pscode = $_POST["u_pscode"];
$u_1st_addr = $_POST["u_1st_addr"];
$u_2nd_addr = $_POST["u_2nd_addr"];
$reg_date = date("y-m-d");

isset($u_email)? $u_email:"";
if ($u_email =="n/a@n/a") $u_email = $u_id;
isset($u_pscode)? $u_pscode:"";
isset($u_1st_addr)? $u_1st_addr:"";
isset($u_2nd_addr)? $u_2nd_addr:"";

 /* 쿼리문 형식으로 변형 */
 $sql = "insert into members(u_id, name, pwd, gender, birth, mobile, email, pscode, addr_b, addr_d, reg_date) values('$u_id','$u_name','$u_pwd', '$u_gender', '$u_birth', '$u_mobile', '$u_email', '$u_pscode', '$u_1st_addr', '$u_2nd_addr', '$reg_date');";
 
/* 만들어진 쿼리를 DB에 보내기 */
mysqli_query($dbcon, $sql); 

//종료
mysqli_close($dbcon);

/* 리디렉션 php에서 */
?>

<!-- 리디렉션 -->
<script type="text/javascript">
//location.href = "이동할 페이지 주소";
location.href = "welcome.php?u_id=<?php echo $u_id ?>&u_name=<?php echo $u_name ?>";
</script>
```

<p align="center">
데이터 중간 처리 페이지 insert.php
</p>

> 데이터 처리 페이지는 사용자가 직접 보는페이지가 아닙니다. 서버에 보내기전에 문법작성과 오류체크를 하기 위한 페이지이고 완료가 되면 서버로 데이터를 전송하고
> 서버에 데이터 저장이 완료되면 페이지 이동을 합니다. 회원가입 완료시에는 완료페이지로, 개인정보 수정완료 후에는 다시 개인정보 페이지로, 게시판에서 글쓰기 완료후에는
> 작성된 글을 볼 수 있는 페이지로 상황에 맞게 리디렉션 합니다.

<br>
<br>
<br>
<br>
<br>

> **5. 예외처리 및 조건**
> 
> 회원가입 시 필요한 예외처리로 아이디 중복확인 및 이미 가입된 개인정보인지 확인합니다. 제가 만든 웹페이지에선 아이디를 이메일형식으로 가입을 하게끔 설계했고 비동기형식으로
> 만들어봤습니다. 실제로는 중복처리과정에 있어 비동기로 DB에서 일일히 비교하는 건 무리가 있을거라고 생각했지만 이번 프로젝트에서 페이지 이동없이 한 페이지내에서 회원가입을 
> 할 수 있도록했습니다.

<p align="center">
<img src="https://user-images.githubusercontent.com/111415080/219997037-36989364-7aaf-41b8-9771-59bcf9d8ce2b.gif">
</p>
<p align="center">
회원가입 시 비동기처리 및 예외처리
</p>

```javascript
	//비동기식 아이디 체크 ajax
        function getCont(g_id) {
            /* 이메일 형식 추가 */
            var CHECK_TYPE_EMAIL = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
            var dsp = document.getElementById("dsp");

            if (!CHECK_TYPE_EMAIL.test(g_id)) {
                dsp.innerHTML = '아이디는 이메일 형식으로만 입력 할 수 있습니다.';
                dsp.className = 'redTxt';
            } else {
                var xmlhttp = fncGetXMLHttpRequest();

                // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
                xmlhttp.open('GET', 'id_check_ajax.php?u_id=' + g_id, false);

                xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == '4' && xmlhttp.status == 200) {
                        if (xmlhttp.status == 500 || xmlhttp.status == 404 || xmlhttp.status == 403)
                            alert(xmlhttp.status);
                        else {
                            var txt = xmlhttp.responseText;
                            txt = txt.replace(/\n/g, ""); // 행바꿈 제거
                            txt = txt.replace(/\r/g, ""); // 엔터값 제거
                            txt = txt.replace(/\s+/, ""); // 왼쪽 공백 제거
                            txt = txt.replace(/\s+$/g, ""); // 오른쪽 공백 제거
                            if (txt == 'Y') {
                                dsp.innerHTML = '이미 가입된 아이디(이메일) 입니다.';
                                dsp.className = 'redTxt';
                            } else {
                                dsp.innerHTML = '사용할 수 있는 아이디(이메일) 입니다.';
                                dsp.className = 'green_txt';
                            }
                        }
                    }
                }
            }
            xmlhttp.send();
        }

```

```javascript
        //비밀번호 정규식 체크
        function pwdFormCheck(pwd) {
            //최소 8 자, 하나 이상의 문자, 하나의 숫자 및 하나의 특수 문자 정규식
            var CHECK_TYPE_PWD = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

            var dsp = document.getElementById("dsp_pwd");
            var dsp_ck = document.getElementById("dsp_ck_pwd");
            var g_id = document.getElementById("user_info_id");
            var pwd_val = document.getElementById("user_info_chkPwd").value;

            if (!CHECK_TYPE_PWD.test(pwd)) {
                dsp.innerHTML = '영문/숫자/특수문자를 포함한 8자이상 20자리 이하<br>';
                dsp.className = 'redTxt';
            } else if (pwd == g_id.value) {
                dsp.innerHTML = '비밀번호는 아이디(이메일)와 동일하게 사용할 수 없습니다.';
                dsp.className = 'redTxt';
            } else {
                dsp.innerHTML = '사용 가능한 비밀번호입니다.';
                dsp.className = 'green_txt';
            }
            if (pwd_val) {
                if (pwd_val != pwd) {
                    dsp_ck.innerHTML = '비밀번호가 일치하지 않습니다.';
                    dsp_ck.className = 'redTxt';
                } else {
                    dsp_ck.innerHTML = '비밀번호가 일치합니다.';
                    dsp_ck.className = 'green_txt';
                }
            }
        }

        //비밀번호 확인 체크
        function pwd_check(pwd_check) {
            var dsp_ck = document.getElementById("dsp_ck_pwd");
            var pwd = document.getElementById("user_info_pwd");

            if (pwd_check != pwd.value) {
                dsp_ck.innerHTML = '비밀번호가 일치하지 않습니다.';
                dsp_ck.className = 'redTxt';
            } else {
                dsp_ck.innerHTML = '비밀번호가 일치합니다.';
                dsp_ck.className = 'green_txt';
            }
        }

```

> 먼저 아이디 형식으로는 정규표현식을 사용하여 이메일형식으로만 가입 할수 있게 설정을 했고 비밀번호도 최소 8자, 하나 이상의 문자, 하나의 숫자 및 하나의 특수 문자를 조합해야만
> 가입가능하도록 했습니다. 그외 필수 정보로는 이름및 생년월일, 성별정도 이고 주소지나 배송지 정보는 나중에 기입 할 수 있게했습니다.

<br>
<br>
<br>
<br>
<br>

> **6. Session**
>
> 회원가입 후 로그인 및 로그인정보를 저장하기 위해 Session을 사용했습니다. 로그인 했을 시 해당 유저데이터를 저장하고 개인정보 수정 및 글쓰기 기능을 가능하도록 합니다.


```php
<?php
session_start();

 $s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"] : "";
 $s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"] : "";
 $s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"] : "";
 ?>
```
<p align="center">
로그인 시 세션 변수에 인덱스 와 로그인유저 정보 저장
</p>

```php
<?php
session_start();

//세션 삭제
//unset(세션 변수);
unset($_SESSION["s_idx"]);  //로그인 페이지 에서 만들었던 변수들 삭제
unset($_SESSION["s_id"] );
unset($_SESSION["s_name"]);

//페이지 이동
echo "    
<script type=\"text/javascript\">
location.href=\"../index.php\";
</script>";
?>
```
<p align="center">
로그인 아웃 시 세션 삭제
</p>

<br>
<br>
<br>
<br>
<br>

> **7. 게시판 및 댓글**
>
> 게시판 기능은 상품에 대한 상품평이나 후기 등 댓글등을 남길 수 있도록 했습니다.
> 
> CRUD 기능과 페이징처리 기능을 구현해보고자 했고 문의글에는 답변 기능도 추가했습니다.

<p align="center">
<img src="https://user-images.githubusercontent.com/111415080/220223629-7299fe90-b08f-46d3-a289-fdf7e6476594.gif">
</p>

> 게시판 기능을 구현해보면서 많은 문제점이 있었습니다. 
> 첫번째로 싱글페이지처리를 상정하지 않고 작업을 진행하여 게시판이 웹 페이지 하단에 있을 시 링크를 클릭할때마다 페이지가 초기화되서 스크롤이 상단으로 이동됩니다. 
>
> 해결방안으로 게시판이 있는 Y의 값을 가져와 링크를 클릭 할 시 그 페이지가 초기화 되더라도 그 위치에 고정되어 있는 것처럼 보이게 했습니다.
> 완벽한 해결책은 아니었고 페이지가 변환되는 과정에순간의 멈춤이 있고 부자연스러웠습니다. 게시판 기능을 구현할때는 분리된 섹션으로 작업을 해야하고 페이지 이동도 신경써야 한다는걸 알았습니다.

```php
//게시판 클릭 시 y스크롤 값 받아오기
$movePos = isset($_GET['movePos']) ? $_GET['movePos'] : "0";
//  스크롤 위치
window.onload = function() {
	window.scrollTo(0, <?php echo $movePos ?>);
};
```
<p align="center">
게시판 목록이 보일 수 있게 windowY 좌표설정
</p>

<br>
<br>
<br>
<br>
<br>

## 프로젝트 후기

### 데이터 연동 피드백

> 로컬서버 구축하는데 시간이 많이 걸렸습니다. 데이터베이스를 공부하고 직접 내컴퓨터에서 실행을 해보려고 하니 DB에 접속하는 과정이나 서버 관리자 root 개념등
> 생소한 부분들이 많았습니다. 또한 쿼리문 작성에서 어려움이 많았습니다. 웹 디자인 작업은 직관적으로 작업하고 수정을 할 수 있었는데 반해 콘솔로 명령어 입력 및 쿼리문 작성에 있어
> 오탈자가 많이 보였고 쉼표나 세미콜론등 기호사용이 중요하다는걸 알았습니다. 
>
> 먼저 웹 서버 개념을 다시 정리했습니다. 웹페이지가 있고 사용자가 있으면 사용자가 남기고간 흔적을 데이터라고 생각하고 이 흔적들은 어떻게 관리 하는지를 생각해봤습니다.
> 웹페이지와 서버간의 연결을 도로라 생각하고 데이터 전송 및 호출의 개념으로 일반 통행이 아닌 양방향 통행으로 개념을 정리했고 데이터를 서버에 보내기전 **예외처리 및 오류 확인**이 
> 꼭 필요하다는걸 느꼈습니다. 
>
> 중간 처리 페이지에서 table에 insert 하기전에 먼저 콘솔로그나 웹상에 텍스트를 노출시키고 복사한다음 cmd로 직접 insert 해봤습니다. 이 과정을 디버깅으로 생각하고 어떤 오류가 있는지
> 체크했습니다. 오탈자나 띄어쓰기 및 따옴표, 쌍따옴표 등 오류가 많이 났던 부분을 주의깊게 살폈고 cmd창에서 텍스트를 복사 붙여넣기 하는게 아닌 타이핑하면서 쿼리문 작성이 손에 익도록
> 했습니다. 그 결과 디버깅 역할을하는 중간 처리 페이지의 중요성을 알 수 있었고 어떤 방식의 예외처리가 있는지 항상 생각하면서 프로그래밍을 할 수있었습니다.

<br>
<br>

### 계획의 중요성

> html, css javascript 학습 후 처음 작업해본 프로젝트였습니다. 웹 퍼블리싱 이나 서버구축 및 데이터 연동, 호스팅 배포까지 정해진 시간내에 깔끔하게 완성하지 못한점이 아쉬웠습니다.
> 첫 번째로 약 한 달동안 작업하면서 느낀점은 세부적인 계획을 세우지 못하고 일주일 단위로 끊어 디자인직업/스크립트작업/서버작업/호스팅작업으로 생각했지만 하루 작업 할당량을 채우지 
> 못하는 경우가 많았고 디자인작업이 생각보다 오래걸렸습니다. 디자인을 시안을 만들고나서 html이나 css로 작업을하고 난 뒤에 javascript로 기능을 추가했지만 스크립트 작업을 하면서도
> 디자인을 계속 수정하는 하는 시간이 많았습니다. 일주일 단위에서 다시 세부적으로 나누지 않고 두리뭉실하게만 작업을 하게되니 오히려 수정작업까지 더해져 시간내에 작업을 끝내지 못했고
> 공부와 병행하면서 작업을 하다보니 얕은지식으로는 원하는 기능을 이끌어 내는데 한계가 많았습니다.

<br>
<br>

### 구체적인 실행계획

> 계획을 세울때에는 구체적으로 명확하게 할 필요가 있다고 느꼈습니다. 한달을 일주일로 나누고 일주일을 사나흘로 나누고 다시 하루 시간 단위로 구체적이고 명확하게 어떤 작업을 어떻게
> 어디까지 할 것인지 계획을 세우는게 중요하다고 생각했습니다. 추상적으로 생각만 해서는 안된다고 판단 내가 할 수있는 역량이 어느정도인지 파악하고 실행 가능한 범위 내에서 실행 계획표
> 를 만들어 작업을 하고 하루 작업은 어느정도 했는지 일주일동안 작업은 어느정도 했는지 항상 기록하고 채우지 못한 부분을 어떻게 할 것인지 해결책은 무엇인지를 명확하게 판단하고 다음
> 계획을 세워 실행하겠습니다.
  
