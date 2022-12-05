<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greetings;

use const BrainGames\Engine\NUMBER_ROUNDS;

function startGame()
{
    $name = greetings();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $questionCount = 1;
    while ($questionCount <= NUMBER_ROUNDS)
    {
        $number = rand(0, 100);
        $isEven = $number%2 ===0? "yes" : "no";
        line("Question: %d", $number);
        $answer = prompt("Your answer");
        ($answer === $isEven) ? line("Correct!") : line("$answer is wrong answer ;(. Correct answer was $isEven.\nLet's try again!");
        $questionCount++;
    }
    
    line("Congratulations, %s!", $name);
}
