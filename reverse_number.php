<?php

$num = 432;
$sum = 0;

while(floor($num) != 0){
    $rem = $num%10;
    $sum = $sum*10+$rem;
    $num = $num/10;
}

echo $sum;
?>