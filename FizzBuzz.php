<?php

declare(strict_types=1);

function fizzBuzz()
{
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 15 === 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 === 0) {
            echo "Fizz\n";
        } elseif ($i % 5 === 0) {
            echo "Buzz\n";
        } else {
            echo "$i\n";
        }
    }
}
fizzBuzz();

/**
 * A more complete solution that can handle a wider range of numbers including negatives
 * @param int $i
 * @param int $j
 */
function fizzBuzzExtended(int $i, int $j)
{
    $fizz = 3;
    $buzz = 5;
    for (; $i <= $j; $i++) {
        $out = '';
        if ($i !== 0 && $i % $fizz === 0) {
            $out .= 'Fizz';
        }
        if ($i !== 0 && $i % $buzz === 0) {
            $out .= 'Buzz';
        }
        echo ($out ?: $i) . "\n";
    }
}

//fizzBuzzExpanded(-15, 20);
