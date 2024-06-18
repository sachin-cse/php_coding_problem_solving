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

?>