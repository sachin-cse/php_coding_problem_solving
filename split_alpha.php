<?php
function stringSplit($str){
    $numbers = array();
    $alpha = array();
    $array = str_split($str);

    for($x=0; $x<count($array);$x++){
        if(is_numeric($array[$x])){
            array_push($numbers, $array[$x]);
        }else{
            array_push($alpha, $array[$x]);
        }
    }

    $numbers = implode($numbers);
    $alpha = implode($alpha);

    return [$alpha, $numbers];
}
print_r(stringSplit('TEWA8392'));

?>