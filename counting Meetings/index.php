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
    foreach ($lastDay as $key => $item) {
        $days[] = [
            0 => $firstDay[$key],
            1 => $lastDay[$key]
        ];
    }
    rsort($days);

    $days = array_map(function($item) {
        $day = range($item[0], $item[1]);
        $day = array_filter($day, function ($row) use ($item) {
            if(array_key_exists($row, $item)) {
                return $row;
            }
        });

        return $day;
    }, $days);
    return count($days);
}

$fisrt_day = [1,1,2];
$last_day = [1,2,3];

var_dump(countMeetings($fisrt_day, $last_day));