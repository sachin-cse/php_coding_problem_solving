<?php
function changeTheWorld($str){
    $newStr = '';
    if(!empty($str) && strlen($str) > 0){
        for($i=0; $i<strlen($str); $i++){
            if(ctype_lower($str[$i])){
                $newStr .=strtoupper($str[$i]);
            }else{
                $newStr .=chr(ord($str[$i])+1);
            }
        }
    }

    return strrev($newStr);
} 

echo changeTheWorld("draGON");
?>