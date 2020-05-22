<?php

function countMeetings($firstDay, $lastDay) {
    foreach ($lastDay as $key => $item) {
        $days[] = [
           0 => $firstDay[$key],
           1 => $lastDay[$key]
        ];
    }

    $meetings = [];
    rsort($days);

        foreach($days as $key => $item) {
                $avalaible = range($item[0], $item[1]);
                foreach($avalaible as $day) {
                        if(!in_array($day, $meetings)) {
                                $meetings[] =  $day;
                        break;
                        }
                } 
        }

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
        @got integer 3
*/
// $fisrt_day = [1, 2, 1, 2, 2];
// $last_day = [3, 2, 1, 3, 3];


/*
        @expect integer  3
        @got integer 3
*/
// $fisrt_day = [1, 10, 11];
// $last_day = [11, 10, 11];

echo countMeetings($fisrt_day, $last_day);