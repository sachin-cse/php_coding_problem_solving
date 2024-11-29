<?php
function capToFront($str){
    $capitalize = '';
    $nocapitalize = '';
    if(!empty($str)){
        for($i=0; $i<strlen($str); $i++){
            if(ctype_upper($str[$i])){

                $capitalize.= $str[$i];
            }else{

                $nocapitalize.= $str[$i];
            }
        }
    }

    return $capitalize.$nocapitalize;
}

echo capToFront('hApPy');
?>