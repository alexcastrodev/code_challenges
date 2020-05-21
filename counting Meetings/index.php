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

    foreach($lastDay as $key => $item) {
        $days[$key] = [
            0 => $firstDay[$key],
            1 => $lastDay[$key]
        ];
    }

    var_dump( $days);
}

$fisrt_day = [1, 2, 1, 2, 4];
$last_day = [3, 2, 1, 3, 5];

 countMeetings($fisrt_day, $last_day);