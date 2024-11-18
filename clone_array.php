<?php
function clone_array($arr){
    $data = [];
    if(is_array($arr) && count($arr) > 0){
        foreach($arr as $key=>$value){
            $data[] = $arr[$key];
        }
    }

    echo "<pre>";
    return [implode(',',$data), $arr];
    echo "</pre>";
}

print_r(clone_array([1,1]));
?>