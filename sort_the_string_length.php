<?php

function sortbystringlength($array){
    usort($array, function($a, $b) {
        return strlen($b) <=> strlen($a);
    });
    return $array; // Return the sorted array
}

print_r(sortbystringlength(['aa', 'bb', 'c', 'ccc', 'a', 'ertre']));
?>
