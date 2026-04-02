<?php

namespace Games;

use function runGame;

function runCalcRounds(): void
{
    $data = [];

    while (count($data) !== ROUNDS) {
        $operations = ['+', '-', '*'];
        $num1 = random_int(1, MAX_RANDOM_NUMBER);
        $num2 = random_int(1, MAX_RANDOM_NUMBER);
        $operation = $operations[array_rand($operations)];

        $answer = match ($operation) {
            '*' => $num1 * $num2,
            '+' => $num1 + $num2,
            '-' => $num1 - $num2
        };

        $data["{$num1} {$operation} {$num2}"] =  (string)$answer;
    }

    runGame(
        'What is the result of the expression?',
        $data
    );
}
