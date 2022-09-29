<?php

$first = [
    "first_name" => "Galih",
    "last_name" => "rizki"
];

$last = [
    "last_name" => "rizki"
];

$full = $first + $last;
// penggabungan array, jika array terakhir memiliki key value yang sama dengan array pertama maka value array terakhir akan di ignore
var_dump($full);

$c = [
    "last_name" => "rizki",
    "first_name" => "Galih"
];

var_dump($first == $c);
// equality

var_dump($first === $c);
// identity, harus sama nilai dan urutan indexny harus sama