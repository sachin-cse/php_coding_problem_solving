<?php
function reversetrianglePattern($n){
    for($i=5; $i>=1; $i--){
        for($j=$i; $j>=1; $j--){
            echo "*";
        }
        echo "<br>";
    }
}

echo reversetrianglePattern(5);

function reversenumberPattern($n){
    for($i=5; $i>=1; $i--){
        for($j=$i; $j>=1; $j--){
            echo $i;
        }
        echo "<br>";
    }
}

echo reversenumberPattern(5);

// reverse number pattern
function reversenumber($n){
    for($i=5; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
            echo $j;
        }
        echo "<br>";
    }
}

echo reversenumber(5);
?>