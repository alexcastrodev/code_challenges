<?php

/*
 * Complete the 'countMeetings' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY firstDay
 *  2. INTEGER_ARRAY lastDay
 */

 function fillNumbers($start, $end) {
    if($start === $end) {
        return [
            0 => $start,
            1 => $end
        ];
    }

    $fills = [];
    for ($i= $start; $start < $end; $i++) { 
        array_push($fills, $start);
    }
    
    return $fills;
 }

function countMeetings($firstDay, $lastDay) {
    foreach($lastDay as $key => $item) {
        $days[] = fillNumbers($firstDay[$key],$lastDay[$key]);
    }

    var_dump($days);
}

$fisrt_day = [1, 2, 1, 2, 20];
$last_day = [3, 2, 1, 3, 22];

 countMeetings($fisrt_day, $last_day);