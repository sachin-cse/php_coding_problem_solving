<?php
function swapNumbers($a, $b){
    $a = $a+$b;
    $b = $a-$b;
    $a = $a-$b;

    return array($a, $b);
}

print_r(swapNumbers(4,3));
?>