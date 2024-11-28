<?php 
function indexMUltiply($arr){
    $sum = 0;
    if(is_array($arr)){
        foreach($arr as $key=>$value){
            $sum+=$key*$value;
        }
    }

    return $sum;
}

print_r(indexMUltiply([-3, 0, 8, -6]));
?>