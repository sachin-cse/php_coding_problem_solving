<?php
function bitwise_and($a,$b){
    return $a & $b;
}

function bitwise_or($a,$b){
    return $a | $b;
}

function bitwise_xor($a,$b){
    return $a ^ $b;
}

echo "Bitwise And:".bitwise_and(7, 12);
echo "</br>";
echo "Bitwise OR:".bitwise_or(7, 12);
echo "</br>";
echo "Bitwise XOR:".bitwise_xor(7, 12);

?>