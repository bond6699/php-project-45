<?php

namespace Games;

use function runGame;

function generateEvenRounds(): array
{
    $data = [];
    while (count($data) !== 3) {
        $number = random_int(1, MAX_RANDOM_NUMBER);
        $answer = $number % 2 === 0 ? "yes" : "no";

        $data[$number] = $answer;
    }
    return $data;
}
