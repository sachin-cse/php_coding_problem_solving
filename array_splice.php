<?php
$origin_array = array(1,2,3,4,5,6,7,8);

$position = 2;
$inserted_value=11;

array_splice($origin_array,2,0,$inserted_value);
print_r($origin_array);
?>