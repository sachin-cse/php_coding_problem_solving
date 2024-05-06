<?php
$ass_arr = ["a"=>"Geeks", "b"=>"For", "c"=>"Geeks"];
// unset method
// unset($ass_arr["b"]);
array_splice($ass_arr,0,1);
print_r($ass_arr);
?>