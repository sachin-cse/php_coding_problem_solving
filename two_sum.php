<?php
$arr = [2,7,11,15];
$numIndex1 = 0;
$numIndex2 = 0;
$target = 9;

for($i=0; $i<=count($arr)-1; $i++){
    for($j=$i; $j<=count($arr)-1; $j++){
        if(($arr[$i] + $arr[$j]) == $target){
            $numIndex1 = $j;
            $numIndex2 = $i;
            break;
        }else{
            continue;
        }
    }
}
print_r([$numIndex1, $numIndex2]);
?>