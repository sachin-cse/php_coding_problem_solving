<?php
function findOddInt($arr){
    if(is_array($arr)){

        $vals = array_count_values($arr);

        foreach($vals as $key=>$val){
            if($val%2 != 0){
                return $key;
            }
        }
    }
}

print_r(findOddInt([10]));
?>