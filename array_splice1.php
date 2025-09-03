<?php
$original_array = [1,2,3];
$pos = 2;
$insert_val = 5;
array_splice($original_array, $pos, 0, $insert_val);

print_r($original_array);
?>