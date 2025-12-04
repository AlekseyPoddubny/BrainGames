<?php

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
