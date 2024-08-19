<?php
function happyYear($year){
    $flag = 0;
    while($flag != 1){
        $number = (string)$year;
        $year = str_split($number);
        
        if(count($year) == count(array_unique($year))){
            $flag = 1;
        }
    }

    echo "Happy number";
}

happyYear(2019);
?>