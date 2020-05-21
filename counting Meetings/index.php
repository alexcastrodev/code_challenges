<?php

/*
 * Complete the 'countMeetings' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY firstDay
 *  2. INTEGER_ARRAY lastDay
 */

function countMeetings($firstDay, $lastDay) {
    $days = [];
    
    foreach($lastDay as $key => $item) {
        $days[$key] = [
            0 => new DateTime('2020-01-0' . $firstDay[$key]),
            1 => new DateTime( '2020-01-0' . $lastDay[$key])
        ];
    }

    var_dump( $days);
}

$fisrt_day = [1, 2, 1, 2, 2];
$last_day = [3, 2, 1, 3, 3];

 countMeetings($fisrt_day, $last_day);