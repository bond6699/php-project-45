<?php

namespace Games;

use function runGame;
function getGcd(int $num1, int $num2): int
{
    while (true) {
        if ($num2 === 0) {
            return $num1;
        } else {
            $temp = $num2;
            $num2 = $num1 % $temp;
            $num1 = $temp;
        }
    }
}

function runGcdRound(): void
{
    $data = [];
    
    while (count($data) !== ROUNDS) {
        $num1 = random_int(1, MAX_RANDOM_NUMBER);
        $num2 = random_int(1, MAX_RANDOM_NUMBER);
        $answer = getGcd($num1, $num2);
        $data["{$num1} {$num2}"] = $answer;
    }
    
    runGame(
        'Find the greatest common divisor of given numbers.',
        $data
    );
}
