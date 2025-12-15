<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\playGames;

function start(): void
{
    playGames(
        'What number is missing in the progression?',
        'BrainGames\Games\BrainProgression\progressionCallback'
    );
}

function progressionCallback(): array
{
    // Генерация чисел для последовательности
    // Кол-во элементов последовательности
    $count = random_int(MIN_NUMBER_COUNT, MAX_NUMBER_COUNT);
    // Значение начального элемета
    $index = random_int(MIN_NUMBER, MAX_NUMBER_INDEX);
    // Шаг последовательности
    $step = random_int(MIN_NUMBER, MAX_NUMBER_STEP);
    // Искомый индекс
    $findX = random_int(MIN_NUMBER, $count - 1);

    // Генерация последовательности
    $results = getProgression($count, $index, $step);

    // Записываем значение искомого элемента
    $result = $results[$findX];
    // Замена значения искомого элемента в последовательности на '..'
    $results[$findX] = '..';
    // Формирование строки из массива последовательности
    $question = implode(' ', $results);

    // Массив для задания и ответа
    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}

// Функция для генерации прогрессии
function getProgression(int $count, int $index, int $step): array
{
    $results = [];
    for ($j = 0; $j <= $count; $j++) {
        $results[] = $index + $step * $j;
    }
    return $results;
}

// Минимальное значение для чисела count
const MIN_NUMBER_COUNT = 7;
// Максимальное значение для чисела count
const MAX_NUMBER_COUNT = 10;
// Минимальное добавочное значение для числа number1
const MAX_NUMBER_INDEX = 50;
// Максимальное значение для чисел number1 и number2
const MAX_NUMBER_STEP = 5;
// Максимальное значение для чисел index, step, findX
const MIN_NUMBER = 1;
