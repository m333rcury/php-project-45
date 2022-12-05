<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greetings;

use const BrainGames\Engine\NUMBER_ROUNDS;

function startGame()
{
    $name = greetings();
    line('What is the result of the expression?');
    
    for ($round = 1; $round <= NUMBER_ROUNDS; $round++) {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $arrayOperations = ["+", "-", "*"];
        $index = array_rand($arrayOperations);
        $correctRes = [
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2,
        ];

        $sign = $arrayOperations[$index];
    
        line("Question: $number1 $sign $number2");
        $answer = prompt("Your answer");
        //($answer == $correctRes[$sign]) ? line("Correct!") : line("$answer is wrong answer ;(. Correct answer was $correctRes[$sign].\nLet's try again!");
        if ($answer != $correctRes[$sign])
        {
            line("$answer is wrong answer ;(. Correct answer was $correctRes[$sign].\nLet's try again!");
            break;
        } else {
            line("Correct!");
        }
      
}
    line("Congratulations, %s!", $name);
}
    