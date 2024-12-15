<?php 
function countUppercase($array){
    $count = 0;
    if(is_array($array)){
        foreach($array as $key=>$value){
            for($i=0; $i<strlen($array[$key]); $i++){
                if(ctype_upper($array[$key][$i])){
                    $count+=1;
                }
            }
        }
    }

    return $count;
}

print_r(countUppercase(["little", "lower", "down"]));
?>