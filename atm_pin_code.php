<?php
function pincodeValidation($str){
    if(strlen($str) == 0){
        return "0";
    }

    if(preg_match('/[^a-z_\-0-9]/i', $str)){
        return "0";
    } else if(strlen($str) == 6 || strlen($str) == 4 && ctype_digit($str)){
        return "1";
    }else{
        return "0";
    }

}

echo (pincodeValidation('123466'));
?>