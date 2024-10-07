<?php
function removeZeros($num){
    if(is_numeric($num)){
        return strpos($num,".") == '' ? rtrim($num,'.'):$num;
    }
}

echo removeZeros(2.500);
?>