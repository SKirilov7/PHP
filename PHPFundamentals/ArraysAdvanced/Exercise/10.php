<?php
function arraySwap($arr, $indexFirst, $indexSecond)
{
    [$arr[$indexFirst], $arr[$indexSecond]] = [$arr[$indexSecond], $arr[$indexFirst]];
    return $arr;
}

function checkIfIsItValidIndexAndExerciseInArray($array, $index, $exerciseName)
{
    if ($index + 1 < count($array) && in_array($exerciseName, $array)) {
        return true;
    } else {
        return false;
    }
}

function arraySwapFunctionFinalSwappings($array, $firstIndex, $secondIndex, $firstExIndex, $secondExIndex)
{
    $array = arraySwap($array, $firstIndex, $secondIndex);
    if ($firstExIndex && $secondExIndex) {
        $array = arraySwap($array, $firstExIndex, $secondExIndex);
    } else if ($firstExIndex && !$secondExIndex) {
        $exercise = array_splice($array, $firstExIndex, 1);
        array_splice($array, $secondIndex + 1, 0, $exercise);
    } else if (!$firstExIndex && $secondExIndex) {
        $exercise = array_splice($array, $secondExIndex, 1);
        array_splice($array, $firstIndex + 1, 0, $exercise);
    }
    return $array;

}

$schedule = explode(', ', readline());
$command = readline();

while ($command !== 'course start') {
    $command = explode(':', $command);
    $currCommand = $command[0];
    $lessonTitle = $command[1];

    switch ($currCommand) {
        case 'Add':
            $schedule[] = $lessonTitle;
            break;
        case 'Insert':
            $index = intval($command[2]);
            if (!in_array($lessonTitle, $schedule)) {
                array_splice($schedule, $index, 0, $lessonTitle);
            }
            break;
        case 'Remove':
            if (in_array($lessonTitle, $schedule)) {
                $index = array_search($lessonTitle, $schedule);
                $length = 1;
                if (checkIfIsItValidIndexAndExerciseInArray($schedule, $index, "$lessonTitle-Exercise")) {
                    $length++;
                }
                array_splice($schedule, $index, $length);
            }
            break;
        case 'Swap':
            $secondTitle = $command[2];

            if (in_array($lessonTitle, $schedule) && in_array($secondTitle, $schedule)) {
                $firstIndex = array_search($lessonTitle, $schedule);
                $secondIndex = array_search($secondTitle, $schedule);
                $firstExerciseIndex = false;
                $secondExerciseIndex = false;
                if (checkIfIsItValidIndexAndExerciseInArray($schedule, $firstIndex, "$lessonTitle-Exercise")) {
                    $firstExerciseIndex = $firstIndex + 1;
                }
                if (checkIfIsItValidIndexAndExerciseInArray($schedule, $secondIndex, "$secondTitle-Exercise")) {
                    $secondExerciseIndex = $secondIndex + 1;
                }
                $schedule = arraySwapFunctionFinalSwappings($schedule, $firstIndex, $secondIndex, $firstExerciseIndex, $secondExerciseIndex);
            }
            break;
        case 'Exercise':
            if (in_array($lessonTitle, $schedule)) {
                $index = array_search($lessonTitle, $schedule);
                if (!in_array("$lessonTitle-Exercise", $schedule)) {
                    array_splice($schedule, $index + 1, 0, "$lessonTitle-Exercise");
                }
            } else {
                $schedule[] = $lessonTitle;
                $schedule[] = "$lessonTitle-Exercise";
            }
            break;
    }
    $command = readline();
}
$index = 0;
for ($i = 0; $i < count($schedule); $i++) {
    $index++;
    echo "$index.$schedule[$i]" . PHP_EOL;
}