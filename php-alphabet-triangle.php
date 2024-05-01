<?php
for($i=65; $i<=69; $i++){
    for($j=5; $j>=$i-64; $j--){
        echo chr($i);
    }
    echo "</br>";
}


$value = range('A', 'Z');

for($i=0; $i<=5; $i++){
    for($j=5; $j>=$i+1; $j--){
        echo $value[$i]; 
    }
    echo "</br>";
}

$k=1;
foreach(range('A', 'Z') as $chr){
    for($j=5; $j>=$k; $j--){
        echo $chr; 
    }
    $k+=1;
    echo "</br>";
}
?>