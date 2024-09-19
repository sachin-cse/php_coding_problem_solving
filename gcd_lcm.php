<?php
function gcd($a,$b){
   while($b != 0){
      $temp = $b;
      $b = $a % $b;
      $a = $temp;
   }

   return $a;
}

echo gcd(2,4);

// lcm
function lcm($a,$b){
   $gcd = gcd(2,4);

   $lcm = ($a*$b)/$gcd;

   return "LCM: $lcm";
}

echo lcm(2,4);
?>