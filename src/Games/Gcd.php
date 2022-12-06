<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameLogic;

function gcd(int $num1, int $num2)
{
    $minNum = ($num1 <= $num2) ? $num1 : $num2;
    while ((($num1 % $minNum) != 0) || (($num2 % $minNum) != 0)) {
        $minNum--;
    }
    return $minNum;
}

function startGame()
{
    $gameInstruction = 'Find the greatest common divisor of given numbers.';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $questions[$i] = "{$number1} {$number2}";
        $correctAnswers[$i] = gcd($number1, $number2);
    }
    gameLogic($gameInstruction, $questions, $correctAnswers);
}
