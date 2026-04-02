<?php

namespace Games;

function generateProgression(): array
{
    $progressionData = [];
    $lenProgression = random_int(5, 10);
    $startProgression = random_int(5, 10);
    $stepProgression = random_int(2, 5);

    for ($i = 0; $i < $lenProgression; $i++) {
        $progressionData[] = $startProgression + $i * $stepProgression;
    }

    return $progressionData;
}

function runProgressionRound(): void
{
    $data = [];

    while (count($data) !== 3) {
        $progression = generateProgression();

        if (empty($progression)) {
            continue;
        }

        $index = random_int(0, count($progression) - 1);
        $answer = $progression[$index];
        $progression[$index] = "..";
        $data[implode(" ", $progression)] = (string)$answer;
    }

    runGame(
        'What number is missing in the progression?',
        $data
    );
}
