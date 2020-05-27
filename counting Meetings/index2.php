<?php

function isBetween($n, $a, $b) {
    return ($n - $a) * ($n - $b) <= 0;
}

function countMeetings($firstDay, $lastDay) {
    $meetings = [];
    $i = 0;
    rsort($firstDay);
    rsort($lastDay);
    foreach($firstDay as $k => $item) {
        $day_of_meeting = $lastDay[$k];
        
        if(!in_array($day_of_meeting, $meetings) && isBetween($day_of_meeting, $firstDay[$k], $lastDay[$k])) {
            $meetings[] = $day_of_meeting;
            $i++;
        } else {
            $day_of_meeting = $lastDay[$k]-1;
            if(!in_array($day_of_meeting, $meetings) && isBetween($day_of_meeting, $firstDay[$k], $lastDay[$k])) {
                $meetings[] = $day_of_meeting;
                $i++;
            }
        }
    }
    return $i;
}

$firstDay = [1, 10, 11];
$lastDay = [11,10,11] ;
echo countMeetings($firstDay, $lastDay);