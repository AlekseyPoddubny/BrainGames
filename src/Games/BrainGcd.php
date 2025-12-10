<?php

use function BrainGames\Engine\playGames;

function brainGcd(): void
{
    playGames("Find the greatest common divisor of given numbers.", 'brainGcdFunc');
}

function brainGcdFunc(): array
{
    $numbA = random_int(1, 50);
    $numbB = random_int(1, 50);
    $result = getGcd($numbA, $numbB);
    $question = "{$numbA} {$numbB}";

    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}

function getGcd(int $a, int $b): int
{
    while (true) {
        $tmp = $a;
        $a = $b;
        $b = $tmp % $b;
        if ($b === 0) {
            return $result = $a;
        }
    }
}
