<?php
function longestStreak($arr){
    if(is_array($arr) && count($arr) > 0){
        // sort thr arr
        usort($arr, function($a,$b){
            return strtotime($a['date']) - strtotime($b['date']);
        });

        $currentStreak = 1;
        $maxStreak = 1;

        for($i=1; $i<count($arr); $i++){
            $diff = (strtotime($arr[$i]['date']) - strtotime($arr[$i-1]['date'])) / (60 * 60 * 24);

        if ($diff === 1) {
            // If the arr are consecutive, increase the current streak
            $currentStreak++;
        } else {
            // Reset current streak if not consecutive
            $currentStreak = 1;
        }

        // Update max streak if current streak is longer
            if ($currentStreak > $maxStreak) {
                $maxStreak = $currentStreak;
            }
        }
    }

    return $maxStreak;
}

print_r(longestStreak([[
    "date" => "2019-09-18"
  ],
  [
    "date" => "2019-09-19"
  ],
  [
    "date" => "2019-09-20"
  ],
  [
    "date" => "2019-09-26"
  ],
  [
    "date" => "2019-09-27"
  ],
  [
    "date" => "2019-09-30"
  ]]));
?>