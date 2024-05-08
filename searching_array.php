<?php
function search_item($arr, $search_items){
    foreach($arr as $key=>$val){
        foreach($search_items as $k=>$v){
            if((!isset($val[$k]) || $val[$k] != $v)){
                continue 2;
            }
        }
        $result[] = $val;
    }
    return $result;
}

$arr = array( 
    1 => array( 
        'rollNo' => 44, 
        'name' => 'Alice', 
        'section' => 'B'
    ), 
    2 => array( 
        'rollNo' => 3, 
        'name' => 'Amit', 
        'section' => 'B'
    ), 
    3 => array( 
        'rollNo' => 3, 
        'name' => 'Bob', 
        'section' => 'A'
    ), 
    4 => array( 
        'rollNo' => 5, 
        'name' => 'Gaurav', 
        'section' => 'B'
    ), 
    5 => array( 
        'rollNo' => 5, 
        'name' => 'Gaurav', 
        'section' => 'A'
    )  
); 

$search_items = array('rollNo'=>5, 'section'=>"A");

$arr_return = search_item($arr, $search_items);

foreach($arr_return as $val){
     print_r($val['name']);
}

?>