<?php
function intezerCount($num){
    if(is_numeric($num)){
        $num = abs($num);
        $count=0;
        while($num != 0){
            $count+=1;
            $num = floor($num/10);
        }
    }

    return $count;
}

echo intezerCount(-1000);
?>