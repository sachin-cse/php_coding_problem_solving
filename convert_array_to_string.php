<?php
function array_to_string($arr){
    $string = implode('', $arr);
    // return "\"$string\"";
    // printf('"%s"', $string);
    return '"'.$string.'"';
}

echo array_to_string([1, 2, 3, 4, 5, 6]);
?>