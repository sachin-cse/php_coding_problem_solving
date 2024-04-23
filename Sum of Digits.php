<!-- To find sum of digits of a number just add all the digits. -->

<!-- 14597 = 1 + 4 + 5 + 9 + 7   -->

<?php
$num = 14597;
$rem = 0;
$sum = 0;
while($num != 0){
    $rem = $num%10;
    $sum = $rem+$sum;
    $num = $num/10;
}

echo "Number of digits " . $sum;
?>