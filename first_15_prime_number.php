<?php
$count = 0;
$num = 2;

while($count < 15){
    $isPrime = true;
    for($i=2; $i<=sqrt($num); $i++){
        if($num%$i == 0){
            $isPrime = false;
            break;
        }
    }
    if($isPrime){
        echo $num . "\n";
        $count++;
    }
    $num+=1;
}
?>