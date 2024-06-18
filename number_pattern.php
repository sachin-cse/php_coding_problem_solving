<?php
function getNumberPattern($num){
    for($i=1; $i<=$num; $i++){
        for($j=1; $j<=$i; $j++){
            echo $i;
        }
        echo "<br>";
    }
}

echo getNumberPattern(5);
?>
<!-- output
1
22
333
4444
55555 -->

<?php
function getNumberPattern1($num){
    for($i=1; $i<=$num; $i++){
        for($j=1; $j<=$i; $j++){
            echo $j;
        }
        echo "<br>";
    }
}

echo getNumberPattern1(5);
?>
<!-- output
1
12
123
1234
12345 -->