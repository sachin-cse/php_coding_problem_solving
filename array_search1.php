<?php
function arraySearch($array){
    if(is_array($array)){
        foreach($array as $key=>$value){
            if($value == 'Layla'){
                return $key;
            }
        }
    }
    return -1;
} 

$names = ["Bob", "Layla", "Kaitlyn", "Patricia"];
echo arraySearch($names);
?>