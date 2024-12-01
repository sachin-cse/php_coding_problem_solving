<?php 
function hasFriday13($month, $year){
    if(!empty($month) && !empty($year)){
        // generate date
        $genDate = date('Y-m-d', strtotime("$year-$month-13"));

        if(date('l', strtotime($genDate)) == 'Friday'){
            return "True";
        }else{
            return "False";
        }
    }
}

echo hasFriday13(1, 1985);
?>