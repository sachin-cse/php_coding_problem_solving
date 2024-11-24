<?php 
function accumalatingArray($array){
    $newArray = [];
    if(is_array($array) && count($array) > 0){
        for($i=0; $i<count($array); $i++){
             
            array_push($newArray, $array[$i]+(!array_key_exists($i-1, $array)?0:$array[$i-1]));
            
        }
    }

    return $newArray;
}

print_r(accumalatingArray([1, 2, 3, 4]));
?>