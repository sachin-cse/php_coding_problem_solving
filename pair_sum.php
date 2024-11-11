<?php
function pairSum($arr, $num){
    $pairArr = [];
    if(is_array($arr) && is_numeric($num)){
        for($i=0; $i<count($arr); $i++){
            for($j=$i+1; $j<count($arr); $j++){
                if(($arr[$i] + $arr[$j]) == $num){
                    $pairArr[] = [$arr[$i], $arr[$j]];
                }
            }
        }

        foreach($pairArr as &$val){
            sort($val);
        }

        usort($pairArr, function($a,$b){
            return $a[0] <=> $b[0];
        });
    }

    return $pairArr;
}

print_r(pairSum([4, 5, 1, 3, 6, 8], 9));
?>