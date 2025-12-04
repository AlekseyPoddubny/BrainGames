<?php

function brainEvenFunc(): array
{
    $rand = random_int(1, 100);
    $rand % 2 === 0 ? $result = "yes" : $result = "no";

    $array = [];
    $array['question'] = $rand;
    $array['result'] = $result;
    return $array;
}
