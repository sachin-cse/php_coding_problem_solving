<?php
function third_max($array){
    $array_uni = array_unique($array);
    if(count($array_uni) < 3){
        return max($array_uni);
    }else{
        rsort($array_uni);
        return $array_uni[2];
    }
}

echo third_max([1,2,3]);
?>