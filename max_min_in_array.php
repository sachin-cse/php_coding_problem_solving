<?php
$arr = [2,6,1,8,9];
$max = $arr[0];
$min = $arr[0];

for($i=0; $i<=count($arr)-1; $i++){
    if($max > $arr[$i]){
        $max = $arr[$i];
    }elseif($min < $arr[$i]){
        $min = $arr[$i];
    }
}

echo "Max: ".$max."<br/>"."Min:".$min;
?>