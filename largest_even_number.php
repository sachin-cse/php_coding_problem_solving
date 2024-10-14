<?php
function getlargestEvennumber($arr){

    $newArr = array();
    if(!is_array($arr)){
        return $arr."Not an array";
    }else{
        rsort($arr);
        // print_r($arr); exit;
        for($i=0; $i<count($arr); $i++){
            if($arr[$i]%2==0){
                $newArr[] = $arr[$i];
                break;
            }
        }
    }

    return count($newArr) > 0 ? max($newArr):"-1";
}

print_r(getlargestEvennumber([0, 19, 18973623]));
?>