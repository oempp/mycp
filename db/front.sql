-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-02-07 02:21
-- 서버 버전: 10.4.25-MariaDB
-- PHP 버전: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `front`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_pwd` varchar(20) NOT NULL,
  `cate` varchar(10) DEFAULT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_content` text NOT NULL,
  `w_date` date NOT NULL,
  `cnt` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `b_name`, `b_pwd`, `cate`, `b_title`, `b_content`, `w_date`, `cnt`) VALUES
(1, '11', '11', 'music', '11', '11', '2022-11-11', 2),
(2, '일반', '11', 'normal', '일반', '일반', '2022-11-11', 2),
(3, '영화', '11', 'movie', '영화', '영화', '2022-11-11', 4),
(4, '뮤직', '뮤직', 'music', '뮤직', '뮤직', '2022-11-11', 4);

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `idx` int(11) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `birth` date DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pscode` varchar(5) DEFAULT NULL,
  `addr_b` varchar(100) DEFAULT NULL,
  `addr_d` varchar(100) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`idx`, `u_id`, `pwd`, `name`, `gender`, `birth`, `mobile`, `email`, `pscode`, `addr_b`, `addr_d`, `reg_date`) VALUES
(1, 'admin', '1111', '관리자', 'm', '1988-05-30', '01088612375', 'thdxodns@naver.com', '11764', '경기도 의정부시', '상금로 41-15', '2022-11-04 00:00:00'),
(2, 'zxzxz', '111444', '김찰스', 'm', '1988-05-30', '0505050505050', 'eemm@naver.com', '54544', '경기도', '으종부', '2022-10-31 00:00:00'),
(3, 'kkaa', '111555', '김남구', 'm', '1845-05-21', '09090909', 'gmdla2@naver.com', '15877', '주소주소2', '주소주소2', '2022-10-31 00:00:00'),
(4, 'lee22', '111444', '리종구', 'm', '1966-05-20', '', '@', '', '', '', '2022-10-31 00:00:00'),
(7, 'cdcd11', '111444', '이웅소', 'f', '1966-05-20', '01025809521', 'kkoo1@gmail.com', '62554', '서울턱별시', '서초', '2022-11-02 00:00:00'),
(9, 'hodmdm', '111444', '김예삐', 'f', '1994-11-02', '0108522365', 'yyeemsl@naver.com', '54221', '서울 ', '중구', '2022-11-04 00:00:00'),
(10, 'boea1323', '111444', '박정미', 'f', '0000-00-00', '0108754132', 'jm0909@gmail.com', '54221', '경기도 포천시', '이가팔리', '2022-11-04 00:00:00'),
(11, 'niuu', '111444', '박광철', 'm', '1985-07-08', '01035256211', 'dhkswjs@gmail.com', '64752', '경기 동두천', '덕꼐', '2022-11-04 00:00:00'),
(12, 'jomaa', '111444', '김재희', 'm', '1990-11-15', '01089002155', 'kjk1122@daum.net', '24546', '어딘가에', '살고있겟지', '2022-11-04 00:00:00'),
(13, 'awaaas@dasdasd.com', '111444', 'a', '남', '0000-00-00', '11323', 'awaaas@dasdasd.com', 'n/a', 'n/a', 'n/a', '2022-11-04 00:00:00'),
(14, '', '111444', '', '', '0000-00-00', '', '', 'n/a', 'n/a', 'n/a', '2022-11-05 00:00:00'),
(15, '', '111444', '', '', '0000-00-00', '', '', 'n/a', 'n/a', 'n/a', '2022-11-05 00:00:00'),
(16, 'aa', '111444', '', '', '0000-00-00', '', 'aa', 'n/a', 'n/a', 'n/a', '2022-11-05 00:00:00'),
(17, '', '111444', '', '', '0000-00-00', '', '', 'n/a', 'n/a', 'n/a', '2022-11-05 00:00:00'),
(18, '', '111444', '', '', '0000-00-00', '', '', 'n/a', 'n/a', 'n/a', '2022-11-05 00:00:00'),
(19, 'aa@aa.com', '111444', '정다정', '남', '1974-05-21', '01022548744', 'aa@aa.com', 'n/a', 'n/a', 'n/a', '2022-11-05 00:00:00'),
(20, 'kkaa', '111444', 'zz', '', '0000-00-00', '', '@', '', '', '', '2022-11-05 00:00:00'),
(21, 'Zungwoo', '111444', '김정우', '남', '1998-02-19', '01012712712', 'woo127@naver.com', '12345', '경기도 군포시', '산본동', '2022-11-04 00:00:00'),
(22, 'taeyeon', '111444', '김태연', '여', '1989-03-09', '01012340147', 'taeyeon01@naver.com', '12345', '전라북도 전주시', '평화동', '2022-11-04 00:00:00'),
(23, 'Linux', '111444', '리누스', '남', '1971-08-25', '01025559999', 'linux@github.com', '12345', '부산광역시 해운대구', '123', '2022-11-04 00:00:00'),
(24, 'parkbo0123', '111444', '박보영', '여', '1986-05-05', '01056567878', 'parkbo0123@naver.com', '12345', '경기 성남시', '분당구', '2022-11-04 00:00:00'),
(25, 'joowon', '111444', '박주원', '남', '1991-12-06', '01062515564', 'peter@i-on.net', '12345', '세종시', '567', '2022-11-04 00:00:00'),
(26, 'dbekcks', '111444', '예지', '여', '2000-05-26', '01012345678', 'dbekcks@naver.com', '12345', '서울특별시 성동구', '성수동', '2022-11-04 00:00:00'),
(27, 'glasslee', '111444', '이유리', '여', '1996-07-14', '01022357709', 'glass22@naver.com', '12345', '서울특별시 성동구', '서울숲2길 17-17 (성수동1가)', '2022-11-04 00:00:00'),
(28, 'iuiu', '111444', '이지은', '여', '1993-05-16', '01012341234', 'iiuu@naver.com', '12345', '경기도 광주군', '광주읍 송정리', '2022-11-04 00:00:00'),
(29, 'arrrrr', '111444', '공원식', '남', '1994-10-14', '01067969679', 'arrrrr@naver.com', '12345', '서울시 강남구', '역삼동', '2022-11-04 00:00:00'),
(30, 'kildong1004', '111444', '김길동', '남', '1961-01-03', '01056567979', 'kildong1004@gmail.com', '12345', '서울시 서대문구', '서대문로 1가 1층 파란지붕집', '2022-11-04 00:00:00'),
(31, 'kiki6', '111444', '기성용', '남', '1990-06-06', '01012341234', 'ki6@naver.com', '12345', '서울시 강남구', '서초동', '2022-11-04 00:00:00'),
(32, 'anomalie1', '111444', 'anomalie', '남', '1993-10-24', '01056785678', 'anomalie@google.co.kr', '12345', '서울특별시 마포구', '연남동', '2022-11-04 00:00:00'),
(33, 'banana', '111444', '바나나킥', '여', '1995-04-20', '01057023342', 'banana@naver.com', '12345', '성남시 분당구', '백현동', '2022-11-04 00:00:00'),
(34, 'optimushwang', '111444', '황민현', '남', '1995-08-09', '01088889999', 'optimushwang@gmail.com', '12345', '부산광역시 수영구', '567', '2022-11-04 00:00:00'),
(35, 'gangnam', '111444', '김강남', '남', '1999-09-09', '01076546543', 'gangnam@naver.com', '12345', '서울특별시 강남구', '대치동', '2022-11-04 00:00:00'),
(36, 'abcabc', '111444', '김범준', '남', '2022-10-25', '01012345678', 'abc123@gmail.com', '12345', '서울시 강남구', '개포동', '2022-11-04 00:00:00'),
(37, 'yunakim', '111444', '김연아', '여', '1990-09-05', '01020140221', 'yunakim@gmail.com', '12345', '서울시 용산구', '한남동', '2022-11-04 00:00:00'),
(38, 'dool2', '111444', '둘리', '남', '1983-04-25', '025727896', 'dool2@gmail.com', '12345', '부천시 원미구', '상1동 412-3번지 둘리의 거리', '2022-11-04 00:00:00'),
(39, 'ljs111', '111444', '이종성', '남', '1984-12-12', '01012345678', 'abc@def.com', '12345', '서울 강남구', '강남대로 428 만이빌딩 5층', '2022-11-04 00:00:00'),
(40, '', '111444', '', '', '0000-00-00', '', '@', '', '', '', '2022-11-07 00:00:00'),
(41, '', '111444', '', '', '0000-00-00', '', '@', '', '', '', '2022-11-07 00:00:00'),
(42, '', '111444', '', '', '0000-00-00', '', '@', '', '', '', '2022-11-07 00:00:00'),
(44, 'aaa@aaaa.caaa', '111444', '에이에이', '여', '1977-11-15', '01033259805', '@', '', '', '', '2022-11-09 00:00:00'),
(45, 'thdxodns@naver.com', 'Tt8474204!', '송태운', '남', '1988-05-30', '01088612375', '@', '', '', '', '2022-11-23 00:00:00'),
(46, 'abcd@naver.com', '123!@#asd', '무궁무진', '여', '1994-04-21', '01023156580', '@', '', '', '', '2022-11-23 00:00:00'),
(47, 'thdxodns@naver.com1', 'Tt8474204!', '송태운', '남', '1988-05-30', '01011154545', '@', '', '', '', '2023-01-25 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `notice`
--

CREATE TABLE `notice` (
  `idx` int(11) NOT NULL,
  `n_title` varchar(20) NOT NULL,
  `n_content` text NOT NULL,
  `writer` varchar(20) NOT NULL,
  `w_date` datetime NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `f_type` varchar(50) DEFAULT NULL,
  `f_data` varchar(50) DEFAULT NULL,
  `cnt` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `notice`
--

INSERT INTO `notice` (`idx`, `n_title`, `n_content`, `writer`, `w_date`, `f_name`, `f_type`, `f_data`, `cnt`) VALUES
(1, 'aa', 'aa', '관리자', '2022-11-07 00:00:00', NULL, NULL, NULL, 2),
(2, 'aa', 'aa', '관리자', '2022-11-07 00:00:00', NULL, NULL, NULL, 1),
(3, '11212', '1212', '관리자', '2022-11-14 00:00:00', '', '', '', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `idx` int(11) NOT NULL,
  `p_code` varchar(20) NOT NULL,
  `p_ct_code` varchar(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` varchar(30) NOT NULL,
  `p_extra_price` varchar(30) DEFAULT NULL,
  `p_show` char(1) NOT NULL,
  `p_on_sale` char(1) NOT NULL,
  `p_for_sale` char(1) NOT NULL,
  `p_stock` char(1) NOT NULL,
  `p_shp_info` varchar(30) DEFAULT NULL,
  `p_img_info` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `product`
--

INSERT INTO `product` (`idx`, `p_code`, `p_ct_code`, `p_name`, `p_price`, `p_extra_price`, `p_show`, `p_on_sale`, `p_for_sale`, `p_stock`, `p_shp_info`, `p_img_info`) VALUES
(1, '1', '1', '1', '1', '1', 'N', 'N', 'N', 'N', '1', '1'),
(2, 'p.00000001', '012398', '77우먼스 여성 하이클래스 셔츠 쉬폰혼방 롱셔츠 상의', '25900', '0', 'Y', 'Y', 'Y', 'Y', '로켓배송', '이미지');

-- --------------------------------------------------------

--
-- 테이블 구조 `product_cmt`
--

CREATE TABLE `product_cmt` (
  `idx` int(11) NOT NULL,
  `p_code` varchar(20) NOT NULL,
  `cmt_name` varchar(20) NOT NULL,
  `cmt_pwd` varchar(20) NOT NULL,
  `cmt_title` varchar(255) NOT NULL,
  `cmt_content` text NOT NULL,
  `cmt_date` date NOT NULL,
  `cmt_cnt` int(11) DEFAULT 0,
  `cmt_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `product_cmt`
--

INSERT INTO `product_cmt` (`idx`, `p_code`, `cmt_name`, `cmt_pwd`, `cmt_title`, `cmt_content`, `cmt_date`, `cmt_cnt`, `cmt_score`) VALUES
(1, 'p.00000001', 'aaa', 'aaa', 'aaa', 'aaaa', '2022-11-16', 0, NULL),
(2, 'p.00000001', 'bbb', 'bbb', 'bbb', 'bbbbbbbbbbb', '2022-11-17', 0, NULL),
(3, 'p.00000001', 'friamxc', '12122', '평점 체크', '평점 체크', '2022-11-18', 0, 5),
(4, 'p.00000001', 'bmovcl', '1233334545', '리뷰 길이는 몇글자 까지 나오는지 체쳌츠케츠케츠케츠케츸', '내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용', '2022-11-18', 0, 3),
(5, 'p.00000001', 'ging11212', '12121', '리뷰남김', '리뷰뷰뷰뷰뷰뷰', '2022-11-18', 0, 4),
(6, 'p.00000001', 'cocmsl', '12', '사지마세요이런거', 'ㅇㅇㅇㅇㅇㅇㅇ', '2022-11-18', 0, 1),
(7, 'p.00000001', 'voasmd', '123123', '리뷰입니다', '내용입니다', '2022-11-24', 0, 1),
(8, 'p.00000001', 'dada34', '123123', '상품평 ', '상품에 관한 내용입력ㅇㅇ', '2022-11-25', 0, 4);

-- --------------------------------------------------------

--
-- 테이블 구조 `product_qna`
--

CREATE TABLE `product_qna` (
  `idx` int(11) NOT NULL,
  `p_code` varchar(20) NOT NULL,
  `qna_name` varchar(20) NOT NULL,
  `qna_pwd` varchar(20) NOT NULL,
  `qna_cate` varchar(10) DEFAULT NULL,
  `qna_title` varchar(255) NOT NULL,
  `qna_content` text NOT NULL,
  `qna_answer` text DEFAULT NULL,
  `qna_answer_check` varchar(20) NOT NULL,
  `qna_date` date NOT NULL,
  `qna_cnt` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `product_qna`
--

INSERT INTO `product_qna` (`idx`, `p_code`, `qna_name`, `qna_pwd`, `qna_cate`, `qna_title`, `qna_content`, `qna_answer`, `qna_answer_check`, `qna_date`, `qna_cnt`) VALUES
(1, 'p.00000001', '네이밍', '비번비버', 'q_basic', '제목제목제', '무니문미', NULL, '', '2022-11-17', 2),
(2, 'p.00000002', '상품2번', '123123', 'q_shpping', '2번문의임', '2번비버버번', NULL, '', '2022-11-17', 0),
(3, 'p.00000001', '김무스', '1212', 'q_ect', '이거 욀케 비싸요', '비싸서 안삼', NULL, '', '2022-11-17', 0),
(4, 'p.00000001', '곤잘레스', '121211', 'q_shipping', '배송언제와요', '빨리 보내주세요', '싫어요', '2022-11-23', '2022-11-17', 17),
(5, 'p.00000001', '테스터', '1212', 'q_product', 'page test12121', 'aaa11111', NULL, '', '2022-11-18', 3),
(6, 'p.00000001', '테스터', '1212', 'q_product', 'page test12121', 'aaa11111', NULL, '', '2022-11-18', 2),
(7, 'p.00000001', '테스터', '1212', 'q_product', 'page test12121', 'aaa11111', '답변 답변 답변 답답답답답변', '2022-11-22', '2022-11-18', 2),
(8, 'p.00000001', '테스터', '1212', 'q_product', 'page test12121', 'aaa11111', '답변 달아 버리기', '2022-11-22', '2022-11-18', 4),
(9, 'p.00000001', '박철두', '111222', 'q_product', '사이즈 문의', '각 사이즈별 실측 사이즈 알려주세요', '실측 사이즈는 상품 정보란 참조 바랍니다', '2022-11-24', '2022-11-24', 0),
(10, 'p.00000001', '김아무개', '1212', 'q_exchange', '상품 교환 문의 남깁니다', '반품 주소지는 어디있나요', NULL, '', '2022-11-24', 0),
(11, 'p.00000001', '세이세이', '123123', 'q_etc', '상품 기타 문의', '상품 기타 문의', '기타 문의 답변', '2022-11-25', '2022-11-25', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `product_cmt`
--
ALTER TABLE `product_cmt`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `product_qna`
--
ALTER TABLE `product_qna`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- 테이블의 AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `product_cmt`
--
ALTER TABLE `product_cmt`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `product_qna`
--
ALTER TABLE `product_qna`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
