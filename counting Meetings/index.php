<?php

function countMeetings($firstDay, $lastDay) {
    foreach ($lastDay as $key => $item) {
        $days[] = [
           0 => $firstDay[$key],
           1 => $lastDay[$key]
        ];
    }

   $days  = array_map(function($item) {
        return range($item[0], $item[1]);
    }, $days);

    rsort($days);

    $meetings = [];
    array_map(function($item) use (&$meetings) {
        $item[1] = count($item) > 1 ? $item[1] : $item[0];
       if($item[0] == $item[1]) {
            $meetings[] = $item[0];
       } else {
        $meetings[] = in_array($item[0], $meetings) ?  $item[0] : $item[1];
       }
    },$days);
    // var_dump($meetings);
    $meetings  = array_unique($meetings);
    return count($meetings);
}

/*
        @expect integer  2, 
        @got integer 2  
*/
// $fisrt_day = [1,1,2];
// $last_day = [1,2,2];

/*
        @expect integer  3
        @got integer 2
*/
$fisrt_day = [1, 2, 1, 2, 2];
$last_day = [3, 2, 1, 3, 3];


/*
        @expect integer  3
        @got integer 3
*/
// $fisrt_day = [1, 10, 11];
// $last_day = [11, 10, 11];



echo countMeetings($fisrt_day, $last_day);