<?php

namespace Games;

use function runGame;

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function generatePrimeRound(): array
{
    $data = [];
    while (count($data) !== 3) {
        $number = random_int(1, 99);
        $data[$number] = isPrime($number) ? 'yes' : 'no';
    }
    return $data;
}
