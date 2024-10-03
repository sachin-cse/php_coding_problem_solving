<?php
function reverseAndCapitalize($str){
    if($str == ''){
        return $str;
    }

    return strtoupper(strrev($str));
}

echo reverseAndCapitalize('Hare Krishna');
?>