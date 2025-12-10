<?php

use function BrainGames\Engine\playGames;

function brainEven(): void
{
    playGames("Answer \"yes\" if the number is even, otherwise answer \"no\".", 'brainEvenFunc');
}

function brainEvenFunc(): array
{
    $rand = random_int(1, 100);
    isEven($rand) ? $result = "yes" : $result = "no";

    $array = [];
    $array['question'] = $rand;
    $array['result'] = $result;
    return $array;
}

function isEven(int $a): bool
{
    return $a % 2 === 0;
}
