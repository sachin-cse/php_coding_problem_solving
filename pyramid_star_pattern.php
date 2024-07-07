<?php
function pyramidStarpattern($n){
    for($i=1; $i<=$n; $i++){
        for($k=$n; $k>=$i; $k--){
            echo"&nbsp;";
        }

        for($j=1; $j<=$i; $j++){
            echo "*".' ';
        }
        echo "<br>";
    }

    for($i=$n-1; $i>=1; $i--){
        for($k=$n; $k>=$i; $k--){
            echo"&nbsp;";
        }

        for($j=1; $j<=$i; $j++){
            echo "*".' ';
        }
        echo "<br>";
    }
}

echo pyramidStarpattern(5);
?>