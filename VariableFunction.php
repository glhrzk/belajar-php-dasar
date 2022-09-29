<?php

function foo()
{
    echo "Hello foo" . PHP_EOL;
}

function bar()
{
    echo "Hello bar" . PHP_EOL;
}

$fungsiFoo = "foo";
$fungsiFoo();
$fungsiBar = "bar";
$fungsiBar();

// contoh kita gunakan untuk manipulasi fungsi built in php
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName, ini adalah Variable function" . PHP_EOL;
}

sayHello("GaLiH", "strtoupper");
sayHello("uJanG", "strtolower");
// strtoupper diatas jika menggunakan variable function

strtoupper("galih");
// penggunaan defaultnya.