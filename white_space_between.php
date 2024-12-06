<?php 
function innerWhiteSpace($string){
    $result = '';
    if(!empty($string)){
        for($i=0; $i<strlen($string); $i++){
            $result .= $string[$i];

            if($i < strlen($string) - 1 && ctype_lower($string[$i]) && ctype_upper($string[$i + 1])){
                $result .= ' ';
            }
        }
    }
    return $result;
}

echo innerWhiteSpace("SheWalksToTheBeach");
?>