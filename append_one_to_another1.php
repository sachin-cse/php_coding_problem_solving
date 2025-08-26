<?php

$arr1 = [1,2];

$arr2 = [3,4];
// array_push($arr1, ...$arr2);

$merged = [...$arr1, ...$arr2];
print_r($merged);
?>