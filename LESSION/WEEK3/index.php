<?php
    $a = 7;
    $b = 8;

    $sum = sum($a, $b);
    echo $sum;

    function swap(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
?>