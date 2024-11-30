<?php
function reverseArr($num){
    $arr = [];
    if(!empty($num)){
        $numstr = (string)$num;
        for($i=strlen($numstr)-1; $i>=0; $i--){
            array_push($arr, $numstr[$i]);
        }
    }

    return array_values($arr);
}

print_r(reverseArr(123456789));
?>