<?php
function missingNumber($arr){
    $missing_number = array();
    $max = max($arr);
    $min = min($arr);
    $arr_range = range($min, $max);
    if(is_array($arr)){
        for($i=0; $i<count($arr_range); $i++){
            if(!in_array($arr_range[$i], $arr)){
                $missing_number[] = $arr_range[$i];
            }
        }

        return $missing_number;
    }
}

print_r(missingNumber([17, 16, 15, 10, 11, 12]));
?>