<?php
//$dbcon = mysqli_connect("mysql","root","", "front") or die("접속 실패");
$dbcon = mysqli_connect("localhost","root","", "front") or die("접속 실패");
mysqli_set_charset($dbcon, "utf8");
?>