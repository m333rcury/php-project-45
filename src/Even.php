<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function startGame()
{
    $questionCount = 1;
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    
    while ($questionCount <= 3)
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
