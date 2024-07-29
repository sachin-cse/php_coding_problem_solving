<?php

function arraySearch($names){
    foreach($names as $key=>$value){
        if($value == 'Layla'){
            return $key;
        }
    }
    return -1;
}
$names = ["Bob", "Layla", "Kaitlyn", "Patricia"];
echo arraySearch($names);

?>