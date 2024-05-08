<?php
function is_anagram($str1, $str2){
    if(count_chars($str1,1) == count_chars($str2,1)){
        return "yes";
    } else {
        return "No";
    }
}

echo(is_anagram('sachin', 'mandal'));
?>