<?php

/*
// Путь, который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
*/

function brainGcdFunc(): array
{
    $numbA = rand(1, 50);
    $numbB = rand(1, 50);
    $result = $numbA;
    $question = "{$numbA} {$numbB}";

    do {
        if ($numbB === 0) {
            $result = $numbA;
            break;
        } else {
            $tmp = $numbA;
            $numbA = $numbB;
            $numbB = $tmp % $numbB;
        }
    } while ($numbB >= 0);

    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}
