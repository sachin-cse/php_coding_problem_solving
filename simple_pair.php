<?php
function getPair($num, $target){
    if(count($num) > 0){
        for($i=0; $i<count($num); $i++){
            for($j=$i+1; $j<count($num); $j++){
                if($num[$i]*$num[$j] == $target){
                    return [$num[$i], $num[$j]];
                    break;
                }
            }
        }
    }
}

print_r(getPair([1, 2, 3], 6));
?>