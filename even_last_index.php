<?php
function even_last_index($arr){
    $item = [];
    $count = 0;
    if(is_array($arr)){
        for($i=0; $i<count($arr); $i++){
            if($i%2 == 0 && $arr[$i]%2 == 0){
                $count+=$arr[$i]*$arr[count($arr)-1];
            }
        }
    }
    
    return $count;
}

print_r(even_last_index([2, 3, 4, 5]));
?>