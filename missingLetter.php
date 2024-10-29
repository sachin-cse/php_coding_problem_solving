<?php
function missingLetter($arr){
    if(is_array($arr)){
        for($i=0; $i<count($arr); $i++){

            $range = range($arr[$i],$arr[count($arr)-1]);

            foreach($range as $value){
                if(!in_array($value,$arr)){
                    return $value;
                    break;
                }
                
            }
        }
    }
}

print_r(missingLetter(['A','B','D']));
?>