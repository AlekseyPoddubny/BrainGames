<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\playGames;

function start(): void
{
    playGames(
        'Answer "yes" if given number is prime. Otherwise answer "no".',
        'BrainGames\Games\BrainPrime\primeCallback'
    );
}

function primeCallback(): array
{
    // Генерация случайного числа для задачи
    $number = random_int(MIN_NUMBER, MAX_NUMBER);
    // Вычисляем результат действия
    $result = isPrime($number) ? 'yes' : 'no';

    // Массив для задания и ответа
    $array = [];
    $array['question'] = $number;
    $array['result'] = $result;
    return $array;
}

// Функция для проверки числа на простоту
function isPrime(int $num): bool
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

// Максимальное значение для числа
const MAX_NUMBER = 50;
// Минимальное значение для числа
const MIN_NUMBER = 1;
