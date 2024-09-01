<?php
function sortingArray($array){
    usort($array, function($a,$b){
        return strlen($a)-strlen($b);
    });

    return $array;
}

print_r(sortingArray(["Google", "Apple", "Microsoft"]));
?>