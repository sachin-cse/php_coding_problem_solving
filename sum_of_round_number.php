<?php
function sumOfRoundNumber($number){

    $roundNumbers = [];
    $convertNUmtoString = (string)$number;
    for($i=0; $i<strlen($convertNUmtoString); $i++){
        if($convertNUmtoString[$i] != 0){
            $roundNumbers[] = $convertNUmtoString[$i]*pow(10,strlen($convertNUmtoString)-($i+1));
        }
    }

    return '"'.implode(" ",array_reverse($roundNumbers)).'"';
}

echo(sumOfRoundNumber(54210));
?>