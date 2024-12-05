<?php
function strMatchBy2char($str1, $str2){
    $count = 0;
    $length = min(strlen($str1),strlen($str2));
    if(!empty($str1) && !empty($str2)){
        for($i=0; $i<$length-1; $i++){
            if($str1[$i] == $str2[$i] && $str1[$i+1] == $str2[$i+1]){
                $count+=1;
            }
        }
    }

    return $count;
}

echo strMatchBy2char("yytaazz", "yyjaaz");
?>