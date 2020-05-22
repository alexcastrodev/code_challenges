<?php

function countMeetings($firstDay, $lastDay) {
    $meetings = [];
    $count = 0;
        foreach($firstDay as $key => $item) {
                $i = $item;
                var_dump($i);
                while($i <= $lastDay[$key]) {
                    var_dump($i);
                    if(!in_array($i, $meetings)) {
                                $meetings[] =  $i;
                                $count++;
                                break;
                        }
                        $i++;
                }
        }

    return $count;
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
//$fisrt_day = [1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2,1, 2, 1, 2, 2];
//$last_day = [3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3,3, 2, 1, 3, 3];

/*
        @expect integer  3
        @got integer 3
*/
 $fisrt_day = [1, 10, 11];
 $last_day = [11, 10, 11];
echo countMeetings($fisrt_day, $last_day);