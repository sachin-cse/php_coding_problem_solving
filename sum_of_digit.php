<?php

    $digit = '2580';
    $convert_int = (int) $digit;
    $sum = 0;
    while($convert_int != 0){
        $num = $convert_int % 10;
        $sum += $num;
        $convert_int = (int)($convert_int / 10);
    }

    echo $sum; 

?>