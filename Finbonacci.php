<?php

declare(strict_types=1);

function fibonacci($n)
{
    if ($n === 0) {
        return 0;
    }
    if ($n < 3) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

var_dump(fibonacci(1) === 1);
var_dump(fibonacci(5) === 5);
var_dump(fibonacci(10) === 55);

function fibonacciIterator($n)
{
    $f = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $f[] = $f[$i - 1] + $f[$i - 2];
    }
    return $f[$n];
}

var_dump(fibonacciIterator(1) === 1);
var_dump(fibonacciIterator(5) === 5);
var_dump(fibonacciIterator(10) === 55);

