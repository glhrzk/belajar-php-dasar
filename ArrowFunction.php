<?php

/*

arrow function, sama seperti anonymous function tetapi lebih powerfull
di arrow function tidak perlu menggunakan keyword use ketika ingin menggunakan variable diluar function.
arrow function adalah function yang langsung mengembalikan nilai tanpa harus menggunakan keyword return.

*/

$firstName = "Galih";
$lastName = "rizki";

$anonFunction = function () use ($firstName, $lastName): string {
    return "Hello $firstName $lastName ini adalah anonymous function" . PHP_EOL;
};

var_dump($anonFunction());
// ini adalah anonymous function


$arrowFunction = fn () => "Hello $firstName $lastName ini adalah arrow function" . PHP_EOL;

var_dump($arrowFunction());
// ini adalah arrow function
