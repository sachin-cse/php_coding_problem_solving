<?php
function getYearCentury($year){
    $century="";
    $year = ($year == '' || $year == ' ') ? 1 : $year;
    switch($year){
        case in_array($year, range(1001, 1100)):
            $century="11th century";
            break;

        case in_array($year, range(1101, 1200)):
            $century="11th century";
            break;

        case in_array($year, range(1201, 1300)):
            $century="12th century";
            break;

        case in_array($year, range(1301, 1400)):
            $century="13th century";
            break;
        default:
            $century="No any year given";
            break;
    }

    return $century;
}

echo getYearCentury('1302');
?>