<?php
function countDigits($arr,$str){
    $result = [];
    if(is_array($arr) && $str != ''){
            for($i=0; $i<count($arr); $i++){
                $count = 0;
                $strln = strval($arr[$i]);

                for($j=0; $j<strlen($strln); $j++){
                    $digit = intval($strln[$j]);
                    if($str == 'odd' && $digit % 2 != 0){
                        $count+=1;
                    }

                    if($str == 'even' && $digit % 2 == 0){
                        $count+=1;
                    }
                }

                array_push($result, $count);
            }
    }

    echo "<pre>";
    return $result;
    echo "</pre>";
}

print_r(countDigits([22, 53, 99, 61, 777, 8], "odd"));
?>