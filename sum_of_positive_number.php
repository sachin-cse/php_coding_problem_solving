<?php
class SumPositiveNUmver{

    public function SumOfPositiveNumber($num){

        $sum=0;

        if($num > 0){
            while($num != 0){
                $digits = $num%10;
                $sum+=$digits;
                $num = $num/10;
    
            }

            return $sum;
        }else{
            return $num . "is not a positve number";
        }

    }
}

$sumPositiveNumber = new SumPositiveNUmver();
echo $sumPositiveNumber->sumOfPositiveNumber(123);
?>