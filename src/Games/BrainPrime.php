<?php

use function BrainGames\Engine\playGames;

function brainPrime(): void
{
    playGames("Answer \"yes\" if given number is prime. Otherwise answer \"no\".", 'brainPrimeFunc');
}

function brainPrimeFunc(): array
{
    $number = random_int(1, 50);
    $question = (string)$number;
    isPrime($number) ? $result = "yes" : $result = "no";

    $array = [];
    $array['question'] = $question;
    $array['result'] = $result;
    return $array;
}

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
