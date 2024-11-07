<?php
function remixString($str, $arr){
    $result = array_fill(0, strlen($str), '');
    if(is_array($arr) && !empty($str)){
        for($i=0; $i<strlen($str); $i++){
            $result[$arr[$i]] = $str[$i];
        }
    }

    return implode("",$result);
}

echo(remixString("abcd", [0, 3, 1, 2]));

// a=>0, b=>1, c=>2, d=>3,
?>