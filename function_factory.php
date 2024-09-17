<?php
function createAdder($baseNumber){
    return function($newNumber) use ($baseNumber){
        return $baseNumber + $newNumber;
    };
}

$add5 = createAdder(5);
echo $add5(10);
?>