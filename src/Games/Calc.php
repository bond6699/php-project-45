<?php

namespace Games;

use function runGame;


function generateCalcRound(): array
{
    $operations = ['+', '-', '*'];
    $num1 = rand(1, MAX_RANDOM_NUMBER);
    $num2 = rand(1, MAX_RANDOM_NUMBER);
    $operation = $operations[array_rand($operations)];

    switch ($operation) {
        case "*":
            $answer = $num1 * $num2;
            break;
        case "+":
            $answer = $num1 + $num2;
            break;
        case "-":
            $answer = $num1 - $num2;
            break;
    }

    return [
        'question' => "{$num1} {$operation} {$num2}",
        'answer' => $answer
    ];
}

function runCalcGame(): void
{
    runGame(
        'What is the result of the expression?',
        'Games\generateCalcRound'
    );
}