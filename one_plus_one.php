<?php
function wordMath($str){
    if(!empty($str)){
        $stringSplit = explode(" ", $str);

        $numRange = ["zero"=>0, "one"=>1, "two"=>2];

        $words = array_flip($numRange);

        $num1 = $numRange[lcfirst($stringSplit[0])];
        $operand = $stringSplit[1];
        $num2 = $numRange[lcfirst($stringSplit[2])];

        if($operand === 'plus'){
            $result = $num1 + $num2;
        }elseif($operand === 'minus'){
            $result = $num1 - $num2;
        }

        return ucfirst($words[$result]);
    }
}

echo wordMath("One plus one");
?>