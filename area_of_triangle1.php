<?php 
function area_of_triangle($a, $b){
    if(!empty($a) && !empty($b)){
        return ($a*$b/2)."M<sup>2</sup>";
    }else{
        return 'Please give input';
    }

    echo area_of_triangle(2,4);

}
?>