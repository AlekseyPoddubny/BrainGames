<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function playGames(string $exercise, callable $game): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}");
    line("{$exercise}");
    $isWinner = true;

    for ($i = 0; $i < 3; $i++) {
        $results = [];
        $results = $game();
        $question = $results['question'];
        $result = $results['result'];

        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer === $result) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
            $isWinner = false;
            break;
        }
    }

    if ($isWinner) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
