<?php
function reverse_arr($arr){
    $rev_arr = [];
    for($i=count($arr)-1; $i>=0; $i--){
        $rev_arr[] = $arr[$i];
    }

    return $rev_arr;
}
$array = reverse_arr([1,2,3,4]);
print_r($array);
?>