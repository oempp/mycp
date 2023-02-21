<?php
$MAX_PRODUCT = 120;

for ($i = 1; $i <= $MAX_PRODUCT; $i++) {
    if ($i > 9 && $i < 100) {
        $product[$i] = "p.000000" . $i;
        //echo $product[$i] . "<br>";
    } else if ($i > 99 && $i < 1000) {
        $product[$i] = "p.00000" . $i;
        //echo $product[$i] . "<br>";
    } else if ($i > 999 && $i < 10000) {
        $product[$i] = "p.0000" . $i;
        //echo $product[$i] . "<br>";
    }else if ($i > 9999 && $i < 100000) {
        $product[$i] = "p.000" . $i;
        //echo $product[$i] . "<br>";
    }else if ($i > 99999 && $i < 1000000) {
        $product[$i] = "p.00" . $i;
        //echo $product[$i] . "<br>";
    }else if ($i > 999999 && $i < 10000000) {
        $product[$i] = "p.0" . $i;
        //echo $product[$i] . "<br>";
    }else {
        $product[$i] = "p.0000000" . $i;
        //echo $product[$i] . "<br>";
    }    
}




?>