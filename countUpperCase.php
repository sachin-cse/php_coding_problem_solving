<?php
function countUpperCase($arr){
    $count=0;
    if(is_array($arr)){
        for($i=0; $i<count($arr); $i++){
            $str = $arr[$i];
            for($j=0; $j<strlen($str); $j++){
                if(ctype_upper($str[$j])){
                    $count+=1;
                }
            }
        }

        return $count;
    }
}

print_r(countUpperCase(["SOLO", "hello", "Tea", "wHat"]));
?>