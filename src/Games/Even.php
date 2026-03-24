<?php

namespace Games;

use function runGame;

function generateEvenRound(): array
{
    $number = rand(1, MAX_RANDOM_NUMBER);
    $answer = $number % 2 === 0 ? "yes" : "no";

    return [
        'question' => $number,
        'answer' => $answer
    ];
}

function runEvenGame(): void
{
    runGame(
        'Answer "yes" if the number is even, otherwise answer "no".',
        'Games\generateEvenRound'
    );
}