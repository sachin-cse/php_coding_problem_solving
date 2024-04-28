<?php
function subtracting_two_number($a, $b){
    if($a>$b){
        return $a-$b;
    } else {
        return $b-$a;
    }
}
echo subtracting_two_number(7, 4);
?>