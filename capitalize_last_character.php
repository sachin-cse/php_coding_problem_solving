<?php
function capitalizeLastCharacter($str){

    $newStr = '';
    $explodeStr = explode(' ', $str??'');
    if(count($explodeStr) <= 1){
        $newStr.=strrev(ucfirst(strrev($explodeStr[0])));
    }else{
        for($i=0; $i<count($explodeStr); $i++){
            $newStr = $newStr . ' ' . strrev(ucfirst(strrev($explodeStr[$i])));
        }
    }

    return $newStr;
}

echo capitalizeLastCharacter('My Name Is Edabit');
?>