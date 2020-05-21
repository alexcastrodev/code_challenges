<?php

/*
 * Complete the 'minOperations' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */
function minOperations($n)
{
   $valorDec = $n;
    for ($i = 1; $i < strlen($n); $i++) {
        $valorDec[$i] = (int)$valorDec[$i-1] ^ (int)$n[$i];
    }
     return $valorDec;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");