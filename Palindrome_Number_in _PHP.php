<?php
function check_palindrome($n){
    $number = $n;
    $sum = 0;
    while(floor($n)){
        $rem = $n%10;
        $sum = $sum*10+$rem;
        $n = $n/10;
    }
    if($sum == $number){
        echo $number." Palindrome Number";
    } else {
        echo $number." Not Palindrome";
    }

}
check_palindrome(1235321);
?>