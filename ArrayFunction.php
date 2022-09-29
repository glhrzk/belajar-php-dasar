<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapFunction = fn ($value) => $value * 5;
var_dump(array_map($mapFunction, $data));

// jika disederhanakan menjadi seperti ini
var_dump(array_map(fn ($value) => $value * 3, $data));

rsort($data);
var_dump($data);

$person = [
    "first_name" => "galih",
    "last_name" => "rizki"
];

var_dump(array_keys($person));
var_dump(array_values($person));
