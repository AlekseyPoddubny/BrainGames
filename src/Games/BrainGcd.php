<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\playGames;

function start(): void
{
    playGames(
        'Find the greatest common divisor of given numbers.',
        'BrainGames\Games\BrainGcd\gcdCallback'
    );
}

function gcdCallback(): array
{
    // Генерация первого числа
    $number1 = random_int(MIN_NUMBER, MAX_NUMBER);
    // Генерация второго числа
    $number2 = random_int(MIN_NUMBER, MAX_NUMBER);

    // Условие для задание
    $question = "{$number1} {$number2}";
    // Вычисляем результат действия
    $result = getGcd($number1, $number2);

    // Массив для задания и ответа
    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}

// Функция для вычисления НОД
function getGcd(int $number1, int $number2): int
{
    while (true) {
        $tmp = $number1;
        $number1 = $number2;
        $number2 = $tmp % $number2;
        if ($number2 === 0) {
            return $number1;
        }
    }
}

// Максимальное значение для числа
const MAX_NUMBER = 50;
// Минимальное значение для числа
const MIN_NUMBER = 1;
