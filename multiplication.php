<?php
$n = range(1,100);

foreach($n as $value){
    for($i=1; $i<=10; $i++){
        echo $value.'x'.$i.'='.$value*$i."\n";
    }
}

?>