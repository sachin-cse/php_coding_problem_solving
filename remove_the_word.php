<?php
function removeTheWord($array,$str){
    if(is_array($array) && strlen($str) > 0){
        for($i=0; $i<strlen($str); $i++){
            if(in_array($str[$i], $array)){
                unset($array[$i]);
            }
        }
    }

    return is_array($array) && strlen($str) > 0 ? $array:'Something went wrong';
}

print_r(removeTheWord(["s", "t", "r", "i", "n", "g", "w"],"string"));
?>