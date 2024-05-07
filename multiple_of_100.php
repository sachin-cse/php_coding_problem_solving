<?php
function multiple_of_100($num){
    for($i=1; $i<=$num; $i++){
        if($num%$i==0){
            echo $i.' ';
        }
    }
}
echo multiple_of_100(100);
?>