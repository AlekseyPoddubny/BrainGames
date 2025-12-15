<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\playGames;

function start(): void
{
    playGames(
        'Answer \'yes\' if the number is even, otherwise answer \'no\'.',
        'BrainGames\Games\BrainEven\evenCallback'
    );
}

function evenCallback(): array
{
    // Генерация случайного числа для задачи
    $number = random_int(MIN_NUMBER, MAX_NUMBER);
    // Вычисляем результат действия
    $result = isEven($number) ? 'yes' : 'no';

    // Массив для задания и ответа
    $array = [];
    $array['question'] = $number;
    $array['result'] = $result;
    return $array;
}

// Проверка числа на чётность
function isEven(int $a): bool
{
    return $a % 2 === 0;
}

// Максимальное значение для числа
const MAX_NUMBER = 100;
// Минимальное значение для числа
const MIN_NUMBER = 1;
