<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameLogic;

function startGame()
{
    $gameInstruction = 'What is the result of the expression?';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    $operations = ['-', '+', '*'];
    for ($i = 0; $i < $roundsCount; $i++) {
        $number1 = rand(1, 30);
        $number2 = rand(1, 30);
        $currentOperation = $operations[rand(0, 2)];
        $questions[$i] = "{$number1} {$currentOperation} {$number2}";
        switch ($currentOperation) {
            case "-":
                $correctAnswers[$i] = $number1 - $number2;
                break;
            case "+":
                $correctAnswers[$i] = $number1 + $number2;
                break;
            case "*":
                $correctAnswers[$i] = $number1 * $number2;
                break;
        }
    }
    gameLogic($gameInstruction, $questions, $correctAnswers);
}
    