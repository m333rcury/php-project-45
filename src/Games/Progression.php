<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameLogic;

function startGame()
{
    $gameInstruction = 'What number is missing in the progression?';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $progression = [];
        $lengthProgression = rand(5, 10);
        $hiddenPos = rand(0, $lengthProgression - 1);
        $step = rand(1, 10);
        $numFirst = rand(1, 10);

        for ($index = 0; $index < $lengthProgression; $index++) {
            $progression[] = $numFirst * $index;
        }
        $correctAnswers[$i] = $progression[$hiddenPos];
        $progression[$hiddenPos] = '..';
        $questions[$i] = implode(" ", $progression);
    }
    gameLogic($gameInstruction, $questions, $correctAnswers);
}
