<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameLogic;

function isPrime(int $num)
{
    if (($num == 1) || ($num == 0)) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


function startGame()
{
    $gameInstruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber = rand(1, 30);
        $questions[$i] = "{$gameNumber}";
        $correctAnswers[$i] = isPrime($gameNumber) ? 'yes' : 'no';
    }
    gameLogic($gameInstruction, $questions, $correctAnswers);
}
