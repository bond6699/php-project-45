<?php

namespace Games;

const MIN_START_PROGRESSION = 5;
const MAX_START_PROGRESSION = 10;

const MIN_LEN_PROGRESSION = 5;
const MAX_LEN_PROGRESSION = 10;

const MIN_STEP_PROGRESSION = 2;
const MAX_STEP_PROGRESSION = 5;

function generateProgression(): array
{
    $progressionData = [];
    $lenProgression = random_int(MIN_LEN_PROGRESSION, MAX_LEN_PROGRESSION);
    $startProgression = random_int(MIN_START_PROGRESSION, MAX_START_PROGRESSION);
    $stepProgression = random_int(MIN_STEP_PROGRESSION, MAX_STEP_PROGRESSION);

    for ($i = 1; $i <= $lenProgression + 1; $i++) {
        $progressionData[] = $startProgression + $i * $stepProgression;
    }

    return $progressionData;
}

function generateProgressionRound(): array
{
    $data = [];
    while (count($data) !== 3) {
        $progression = generateProgression();
        $index = random_int(0, count($progression) -1);
        $answer = $progression[$index];
        $progression[$index] = "..";
        $data[implode(" ", $progression)] = $answer;
    }

    return $data;
}
