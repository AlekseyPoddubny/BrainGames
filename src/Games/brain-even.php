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

function brainEvenFunc(): array
{
    $rand = rand(1, 100);
    $rand % 2 === 0 ? $result = "yes" : $result = "no";

    $array = [];
    $array['question'] = $rand;
    $array['result'] = (string)$result;
    return $array;
}
