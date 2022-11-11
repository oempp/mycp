<?php
session_start();
//echo $_SESSION["s_name"];

//삼항 연산자 (조건)? A : b ;
//true 면 A false 면 b;
    $s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"] : "";
    $s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"] : "";
    $s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"] : "";
    ?>
