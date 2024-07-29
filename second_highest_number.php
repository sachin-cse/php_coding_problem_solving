<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
function secondHighestnumber($nums){
    $max1 = 0;
    $max2 = 0;

    for($i=0; $i<=count($nums); $i++){
        if($nums[$i] > $max1){
            $max2 = $max1;
            $max1 = $nums[$i];  
        }else if($nums[$i] > $max2 && $nums[$i] != $max2){
            $max2 = $nums[$i];
        }
    }
    
    return [$max1,$max2];
}

print_r(secondHighestnumber(['200', '15','69','122','50','201']));
?>