<?php
function returnKeyandValue($arr){
    $keys = [];
    $val = [];
    if(is_array($arr)){
        foreach($arr as $key=>$value){
            $keys[] = $key;
            $val[] = $value;
        }
    }

    return [$keys, $val];
}
$object = (object)[ 'a'=>1, 'b'=>2, 'c'=>3 ];
$array = (array)$object;

echo "<pre>";
print_r(returnKeyandValue($array));
echo "</pre>";
?>