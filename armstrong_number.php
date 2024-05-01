<?php
function check_armstron($num){
    $sum = 0;
    $n = $num;
    while($num != 0){
        $rem = $num%10;
        $sum = $sum*10+$rem*$rem*$rem;
        $num = $num/10;
    }
    if($n == $sum){
        return $n . "is a armstrong number";
    } else {
        return $n." is not a armstrong number";
    }
}
echo check_armstron(125847);
?>