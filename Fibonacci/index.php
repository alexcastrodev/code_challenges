<?php
function fibonacci($n)
{
    $sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $sequence[$i] = $sequence[$i-1] + $sequence[$i-2];
    }

    return $sequence;
}
var_dump(fibonacci(6)); // [0, 1, 1, 2, 3, 5]