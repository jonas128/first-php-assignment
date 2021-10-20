<?php

declare(strict_types=1);

function getRandomIndex(array $anyArray): int
{
    $arrayLenght = count($anyArray);
    return rand(0, $arrayLenght - 1);
}

// function getFirstLetterUc(array $label)
// {
//     foreach ($label as $key => $value) {
//         $newKey = ucfirst(($key));
//         if ($newKey != $key) {
//             unset($label[$key]);
//             $label[$newKey] = $value;
//         }
//     }
// }
