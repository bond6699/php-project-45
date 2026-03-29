<?php

namespace Games;

use function runGame;

function generateEvenRounds(): array
{
    $data = [];
    while (count($data) !== 3) {
        $number = rand(1, MAX_RANDOM_NUMBER);
        $answer = $number % 2 === 0 ? "yes" : "no";

        $data[$number] = $answer;
    }
    return $data;
}
