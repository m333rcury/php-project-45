<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameLogic;

function startGame()
{
    $gameInstruction = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $number = rand(1, 100);
        $questions[$i] = $number;
        $correctAnswers[$i] = ($number % 2 === 0) ? 'yes' : 'no';
    }
    gameLogic($gameInstruction, $questions, $correctAnswers);
}