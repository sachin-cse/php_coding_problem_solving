<?php
$total = 0;
$num  = 407;
$x = $num;
while($x != 0){
    $rem = $x%10;
    $total = $total+$rem*$rem*$rem;
    $x = $x/10;
}

if($total == $num){
    echo "Armstrong number";
} else {
    echo "Not armstrong number";
}
?>