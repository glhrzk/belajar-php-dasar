<?php

/**
 * sebenarnya callback function sama saja dengan function function sebelumnya,
 * seperti anonymous dan arrow, akan tetapi lebih bes practis
 */

function sayHello(string $name, callable $filter)
{

    $finalName = call_user_func($filter, $name);
    /*
    sama saja dengan
    $finalName = $filter($name);
     */
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("galih rizki", "strtoupper");
// langsung memanggil dengan fungsi builtin strtoupper

sayHello("nur", function (string $name): string {
    return strtoupper($name);
});
// menggunakan fungsi anonymous

sayHello("lyh", fn ($name) => strtoupper($name));
// menggunakan fungsi arrow