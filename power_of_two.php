<?php
function isPowerofTwo($val){
    if($val <= 0){
        return false;
    }

    while($val%2 == 0){
        $val = $val / 2;
    }

    return $val==1 ? '1':'0';
}

echo (isPowerofTwo(8));
echo "</br>";
echo (isPowerOfTwo(10));
?>