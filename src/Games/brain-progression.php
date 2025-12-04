<?php

function brainProgressionFunc(): array
{
    $count = rand(7, 10);
    $index = rand(1, 50);
    $step = rand(1, 5);
    $findX = rand(1, $count - 1);

    $results = [];
    for ($j = 0; $j <= $count; $j++) {
        $results[] = $index + $step * $j;
    }

    $result = $results[$findX];
    $results[$findX] = "..";
    $question = implode(" ", $results);

    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}
