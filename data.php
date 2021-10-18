<?php

declare(strict_types=1);




$filters = [

    [
        'name' => 'Oreti',
        'variety' => 'SL28',
        'process' => 'Washed',
        'altitude' => '1585 m.a.s.l',
        'harvested' => 'January 2021',
        'testNotes' => 'Juicy and sweet with floral notes of strawberry lemonade and peach',
        'price' => 399,
        'image' => 'images\oreti.jpeg',
    ],
    [
        'name' => 'Montero Family',
        'variety' => 'Catuai',
        'process' => 'Honey',
        'altitude' => '1900 m.a.s.l.',
        'harvested' => 'March 2021',
        'testNotes' => 'Structured and creamy with notes of chocolate biscuit and ripe plum',
        'price' => 259,
        'image' => 'images\montero.png',
    ],
    [
        'name' => 'Gotiti',
        'variety' => 'Heirloom',
        'process' => 'Natural',
        'altitude' => '2000 m.a.s.l.',
        'harvested' => 'December 2020',
        'testNotes' => 'Jammy and elegant with notes of elderflower and red currant lemonade',
        'price' => 259,
        'image' => 'images\gotiti.jpeg',
    ],
    [
        'name' => 'Bekele Legie',
        'variety' => 'Dega & Wolisho',
        'process' => 'Natural',
        'altitude' => '2000 m.a.s.l.',
        'harvested' => 'December 2020',
        'testNotes' => 'Juicy and sweet with notes of ripe grapes and Earl Grey tea',
        'price' => 259,
        'image' => 'images\bekeleLegie.png',
    ],
    [
        'name' => 'Sandra Milena Mora',
        'variety' => 'Tabi',
        'process' => 'Washed',
        'altitude' => '1700 m.a.s.l.',
        'harvested' => 'January 2021',
        'testNotes' => 'Layered and sweet with notes of red apple and milk chocolate',
        'price' => 399,
        'image' => 'images\sandraMilenaMora.jpeg',
    ],
];

$rewies = [
    'Mmmm this is lovely!',
    'Reminds me about summer.',
    'Just want more!',
    'I want all my cups of coffee to taste like this',
    'Could have tasted a little more i think, will not have this again.',
    'It\'s looks like tea.',
];
shuffle($filters);
foreach ($filters as $filter);
