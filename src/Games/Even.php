<?php

namespace Games;

use function runGame;

function runEvenRounds(): void
{
    $data = [];

    while (count($data) !== ROUNDS) {
        $number = random_int(1, MAX_RANDOM_NUMBER);
        $data[$number] = $number % 2 === 0 ? "yes" : "no";
    }

    runGame(
        'Answer "yes" if the number is even, otherwise answer "no".',
        $data
    );
}
