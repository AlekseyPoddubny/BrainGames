<?php

use function BrainGames\Engine\playGames;

function brainCalcFunc(): void
{
    playGames("What is the result of the expression?", "brainCalc");
}

function brainCalc(): array
{
    $numB = random_int(1, 15);
    $numA = $numB + random_int(1, 5);

    $actions = ['+','-','*'];
    $action = $actions[random_int(0, count($actions) - 1)];

    $result = calc($numA, $numB, $action);

    $array = [];
    $array['question'] = "{$numA} {$action} {$numB}";
    $array['result'] = (string)$result;
    return $array;
}

function calc(int $a, int $b, string $action): int
{

    switch ($action) {
        case '+':
            $result = ($a + $b);
            break;
        case '-':
            $result = ($a - $b);
            break;
        case '*':
            $result = ($a * $b);
            break;
        default:
            $result = 0;
    }

    return $result;
}
