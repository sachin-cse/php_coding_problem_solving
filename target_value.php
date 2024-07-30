<?php
function sumOfTwo($a, $b, $targetVal){
    for($i=0; $i<=count($a)-1; $i++){
        for($j=0; $j<=count($b)-1; $j++){
            if(($a[$i] + $b[$j]) == $targetVal){
                return 1;
                break;
            }
        }
    }
    return 0;
}

echo (sumOfTwo([1, 2], [4, 5, 6], 5));
?>