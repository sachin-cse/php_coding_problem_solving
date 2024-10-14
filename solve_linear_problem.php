<?php
function linearEquation($equation){
    $explodeString = explode('=', $equation);

    if(str_contains($equation, '+')){
        $explodefirstStr = explode('+', $explodeString[0]);

        $explodefirstStr[0] = (int)$explodeString[1] - (int)$explodefirstStr[1];
    }else{
        $explodefirstStr = explode('-', $explodeString[0]);
        $explodefirstStr[0] = (int)$explodeString[1] + (int)$explodefirstStr[1];
    }

    return "x = ".$explodefirstStr[0];

}

echo linearEquation("x - 9 = 10");
?>