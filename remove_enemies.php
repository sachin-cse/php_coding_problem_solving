<?php
function removeEnemies($arr1, $arr2){
    $newArray = [];
    if(is_array($arr1) && is_array($arr2)){
        for($i=0; $i<count($arr1); $i++){
            if(!in_array($arr1[$i], $arr2)){
                $newArray[] = $arr1[$i];
            }
        }
        return $newArray;
    }else{
        return "Not an array";
    }
}

print_r(removeEnemies(["Adam", "Emmy", "Tanya", "Emmy"], ["Emmy"]));
?>