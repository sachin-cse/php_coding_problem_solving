<?php 
function averageLength($str){
    if(!empty($str)){
        $sum = 0;
        $clean_string = str_replace(['.', ',', '!', '?'], '', $str);

        // explode string
        $explode_string = explode(' ', $clean_string);

        foreach($explode_string as $key=>$value){
            $sum += strlen($explode_string[$key]);
        }

        // get avarage
        return number_format($sum/count($explode_string),2);
    }
}

echo averageLength("Dude, this is so awesome!");
?>