<?php

function test($firstDate, $secondDate, $dayOfWeek) {

    $firstDate = new DateTime($firstDate);
    $secondDate = new DateTime($secondDate);
    $i = $firstDate->diff($secondDate)->days;
    $ii = 0;

    while ($i >= $ii) {
        if($firstDate->format('l') == $dayOfWeek) {
            $endpoint = "https://jsonmock.hackerrank.com/api/stocks?date=" .$firstDate->format('d-F-Y');
            $response = json_decode(file_get_contents($endpoint), true);
            if(count($response['data']) > 0) {
                echo $firstDate->format('d-F-Y').' '.$response['data'][0]['open'].' '.$response['data'][0]['close'] . PHP_EOL;
            }
        }
        $firstDate->modify('+1 Day');
        $ii++;
    }

}

$firstDate = '1-January-2000';
$secondDate = '22-February-2000';
$dayOfWeek = 'Monday';

test($firstDate, $secondDate, $dayOfWeek);