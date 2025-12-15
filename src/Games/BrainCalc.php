<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\playGames;

function start(): void
{
    playGames(
        'What is the result of the expression?',
        'BrainGames\Games\BrainCalc\calculateCallback'
    );
}

function calculateCallback(): array
{
    // Генерация второго числа
    $number2 = random_int(MIN_NUMBER, MAX_NUMBER_2);
    // Генерация первого числа
    $number1 = $number2 + random_int(MIN_NUMBER, MAX_NUMBER_1);

    // Массив с возможными действиями
    $actions = ['+','-','*'];
    // Выбираем случайное действие
    $action = $actions[random_int(0, count($actions) - 1)];

    // Вычисляем результат действия
    $result = calculate($number1, $number2, $action);

    // Массив для задания и ответа
    $array = [];
    $array['question'] = "{$number1} {$action} {$number2}";
    $array['result'] = (string)$result;
    return $array;
}

// Функция для вычисления результата выполнения действий
function calculate(int $number1, int $number2, string $action): int
{
    switch ($action) {
        case '+':
            return ($number1 + $number2);
        case '-':
            return ($number1 - $number2);
        case '*':
            return ($number1 * $number2);
        default:
            break;
    }
}

// Минимальное значение для чисел number1 и number2
const MIN_NUMBER = 1;
// Максимальное значение для числа number2
const MAX_NUMBER_2 = 15;
// Максимальное добавочное значение для числа number1
const MAX_NUMBER_1 = 5;
