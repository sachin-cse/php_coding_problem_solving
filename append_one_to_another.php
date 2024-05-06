<?php 
$arr1 = array(1, 2); 
$arr2 = array(3, 4); 

array_push($arr1 , ...$arr2); 

print_r($arr1);
?> 
