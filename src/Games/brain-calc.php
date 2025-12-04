<?php

// Путь, который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

function brain_calc_func(): array
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
