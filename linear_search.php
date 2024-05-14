<?php
function linear_search($arr, $target){
    for($i=0; $i<=count($arr)-1; $i++){
        if($arr[$i] == $target){
            return true;
        }
    }

    return false;
}

$arr = [1,2,3,4];
$target = 4;

echo linear_search($arr, $target); exit;
?>