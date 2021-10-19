<?php

declare(strict_types=1);

function getRandomIndex(array $anyArray)
{
    $arrayLenght = count($anyArray);
    return rand(0, $arrayLenght - 1);
}
