<?php


function test($n, $arr) {
    $count = 0;
    $i = 0;
    sort($arr);
    
    while ($i <= $n) {
        $t = $i +1;
        if(array_key_exists($i, $arr) && array_key_exists($t, $arr)) {
            if($arr[$i] == $arr[$t]) {
                $count++;
                $i++; $i++;
            } else {
                $i++;
            }
        } else {
        break;
        }
        
    }

    return $count;
}

echo test(9, [10, 20 ,20 ,10 ,10 ,30 ,50, 10, 20]);