<?php

function reverseString($str){
    if($str == ""){
        return "\"\"";
    }
    $rev_str = "";
    for($i=strlen($str)-1; $i>=0; $i--){
        $rev_str.=$str[$i];
    }

    return $rev_str;
}

echo reverseString("");
?>