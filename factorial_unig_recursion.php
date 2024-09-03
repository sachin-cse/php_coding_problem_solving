<?php
function recursive_Factorial($num){
    if($num <= 1){
        return 1;
    }else{
        return $num * recursive_Factorial($num-1);
    }
}

echo recursive_Factorial(5);

?>