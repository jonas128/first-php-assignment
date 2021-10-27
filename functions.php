<?php

declare(strict_types=1);

//FUNCTION RETURNS A RANDOM INDEX FROM AN ARRAY
function getRandomIndex(array $anyArray): int
{
    $arrayLenght = count($anyArray);
    return rand(0, $arrayLenght - 1);
}

//FUNCTION RETURNS ONLY THE STRINGS WITH A SPECIFIC VALUE
function getOnlyGoodReviews(array $reviews): array
{
    $goodReviews = [];
    $good = "good";

    foreach ($reviews as $review) {
        if (strpos($review, $good) !== false)
            array_push($goodReviews, $review);
    }
    return $goodReviews;
}
