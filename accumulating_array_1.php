<?php
 if(!function_exists('accumalating_array')){
    function accumalating_array($array){
        if(is_array($array) && count($array) > 0){
            $newarray = [];
            for($i = 0; $i<=count($array); $i++){
                array_push($newarray, $array[$i]+(!array_key_exists($i-1, $array)?0:$array[$i-1]));
            }
        }
    }



    return $newArray;
 } 


 print_r(accumalatingArray([1, 2, 3, 4]));
?>