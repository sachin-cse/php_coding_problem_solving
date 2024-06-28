<?php
$str = "Sachin";

for($i=0; $i<strlen($str); $i++){
    for($j=0; $j<=$i; $j++){
        echo $str[$j]; 
    }
    echo "<br>";
}
?>

<br>
<!-- reverse -->
<?php
$str = "Sachin";
for($i=strlen($str); $i>=0; $i--){
    for($j=0; $j<$i; $j++){
        echo $str[$j]; 
    }
    echo "<br>";
}
?>