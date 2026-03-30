<?php

namespace Games;

use function runGame;

function generateCalcRounds(): void
{
    $data = [];

    $rounds = 3;

    while (count($data) !== $rounds) {
        $operations = ['+', '-', '*'];
        $num1 = random_int(1, MAX_RANDOM_NUMBER);
        $num2 = random_int(1, MAX_RANDOM_NUMBER);
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
            default:
                $answer = 'Incorrect operation!';
        }

        $data["{$num1} {$operation} {$num2}"] =  $answer;
    }

    runGame(
        'What is the result of the expression?',
        $data
    );
}