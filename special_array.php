<?php
function specialArray($array){
    $flag=false;
    for($i=0; $i<count($array); $i++){
        if($i%2 == 0 && $array[$i]%2 == 0){
            $flag=true;
        }elseif($i%2 != 0 && $array[$i]%2 != 0){
            $flag=true;
        }else{
            $flag = false;
        }
    }
    return $flag;
}

print_r(specialArray([2, 7, 9, 1, 6, 1, 6, 3]));
?>
