<?php
$arr = [1,2,3,4];
$flag = "true";
for($i=0; $i<=count($arr)-1; $i++){
    for($j=$i+1; $j<=count($arr)-1; $j++){
        if($arr[$i] == $arr[$j]){
            $flag = "false";
            break;
        }
    }
}
echo $flag;
?>