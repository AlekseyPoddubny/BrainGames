<?php

use function BrainGames\Engine\playGames;

function brainProgression(): void
{
    playGames("What number is missing in the progression?", 'brainProgressionFunc');
}

function brainProgressionFunc(): array
{
    $count = random_int(7, 10);
    $index = random_int(1, 50);
    $step = random_int(1, 5);
    $findX = random_int(1, $count - 1);

    $results = getProgression($count, $index, $step);

    $result = $results[$findX];
    $results[$findX] = "..";
    $question = implode(" ", $results);

    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}

function getProgression(int $count, int $index, int $step): array
{
    $results = [];
    for ($j = 0; $j <= $count; $j++) {
        $results[] = $index + $step * $j;
    }
    return $results;
}
