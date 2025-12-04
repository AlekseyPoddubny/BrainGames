<?php

function brainCalcFunc(): array
{
    $numB = rand(1, 15);
    $numA = $numB + rand(1, 5);

    $actions = ['+','-','*'];

    $action = $actions[rand(0, count($actions) - 1)];

    switch ($action) {
        case '+':
            $result = ($numA + $numB);
            break;
        case '-':
            $result = ($numA - $numB);
            break;
        case '*':
            $result = ($numA * $numB);
            break;
        default:
            $result = 0;
    }

    $array = [];
    $array['question'] = "{$numA} {$action} {$numB}";
    $array['result'] = (string)$result;
    return $array;
}
