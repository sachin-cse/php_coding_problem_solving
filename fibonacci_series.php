<?php
function fibonacci_series($n){
    if($n == 0){
        return $n;
    } else if($n == 1){
        return $n;
    } else {
        return (fibonacci_series($n-1) + fibonacci_series($n-2));
    }
}

$num = 12;
for($i=0; $i<=$num; $i++){
    echo fibonacci_series($i);
    echo "\n";
}
?>