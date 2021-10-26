<?php

declare(strict_types=1);

function getRandomIndex(array $anyArray): int
{
    $arrayLenght = count($anyArray);
    return rand(0, $arrayLenght - 1);
}


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
