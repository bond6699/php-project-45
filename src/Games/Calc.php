<?php

namespace Games;

use function runGame;


function generateCalcRounds(): array
{
    $data = [];
    while (count($data) !== 3) {
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
            default:
                $answer = 'Incorrect operation!';
        }
        $data["{$num1} {$operation} {$num2}"] =  $answer;
    }

    return $data;
}

function runCalcGame(): void
{
    runGame(
        'What is the result of the expression?',
        generateCalcRounds()
    );
}
