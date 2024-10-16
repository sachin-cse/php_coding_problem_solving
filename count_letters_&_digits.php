<?php
function count_letter_and_digits($str){
    $digits = 0;
    $letters = 0;
    if(empty($str ) || $str == ' '){
        return "string is empty";
    }

    for($i=0; $i<strlen($str); $i++){
        if(is_numeric($str[$i])){
            $digits+=1;
        }else if($str[$i] != ' '){
            $letters+=1;
        }
    }

    return ["Leters"=>$letters, "Digits"=>$digits];
}

print_r(count_letter_and_digits("H3ll0 Wor1d"));
?>