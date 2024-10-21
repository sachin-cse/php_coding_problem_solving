<?php
function overTwentyOne($arr){
    $sum = 0;
    if(is_array($arr)){
        $faceCards = ['J','Q','K'];
        $hasAce = false;

        foreach($arr as $card){
            if(is_numeric($card)){
                $sum+=10;
            }elseif(in_array($card,$faceCards)){
                $sum+=10;
            }elseif($card == 'A'){
                $hasAce = true;
                $sum+=11;
            }
        }

        if($sum > 21 && $hasAce){
            $sum -= 10;
        }

        return $sum > 21 ? 'true':'false';
    }
}

print_r(overTwentyOne(['K','Q','J']));
?>