<?php

use function cli\line;
use function cli\prompt;

const MAX_WINS = 3;
const MAX_RANDOM_NUMBER = 99;

function runGame(string $description, $generateRound): void
{
    $name = hello();
    line($description);
    
    $winCounter = 0;
    
    while ($winCounter < MAX_WINS) {
        $round = $generateRound();
        $question = $round['question'];
        $correctAnswer = $round['answer'];

        $userAnswer = prompt("Question: {$question}");
        if ($correctAnswer == $userAnswer) {
            $winCounter++;
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }

    }
    line("Congratulations, {$name}!");
}