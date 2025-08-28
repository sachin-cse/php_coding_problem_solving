<?php

function check_armstrong_number($num){
    if($num != '' && is_numeric($num)){
        $n = $num;
        $sum = 0;
        while($num != 0){
            $rem = $num%10;
            $sum = $sum*10 + $rem*$rem*$rem;
            $num = $num/10;
        }

        if($n==$sum){
            return $n.' is a armstrong number';
        }else{
            return $n. ' is not an armstrong number';
        }
    }else{
        return $num.'is not a valid number';
    }
}

echo check_armstrong_number(153);
?>

