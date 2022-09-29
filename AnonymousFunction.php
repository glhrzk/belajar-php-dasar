<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};
// sama seperti variabel function, hanya anonymous langsung ditulis di dalam variable
// yaitu si value atau statement berupa function

$sayHello("galih rizki");


function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" .  PHP_EOL;
}

sayGoodBye("rasa malas", "strtoupper");
// ini masih menggunakan variable function;


sayGoodBye("Malas Kau", function (string $name): string {
    return strtoupper($name);
});
// ini menggunakan anonymous function, jadi nilai kembalian dari strtoupper variable name dikirim ke parameter function 2


$jadikecil = function (string $name): string {
    return strtolower($name);
};
sayGoodBye("BACOT", $jadikecil);
// bisa juga seperti ini memasukan function ke variable terlebih dahulu, baru mengirimnya ke function utama.

$firstName = "galih";
$lastName = "rizki";

$sayHelloGalih = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloGalih();

$firstName = "nur";
$lastName = "lyh";
$sayHelloGalih();
/*
ketika di define ulang dengan value berbeda dia tidak akan merubah,
karena ketika kita menggunakan keyword use pada anonymous function dia akan merujuk kepada variable diatas function tersebut
*/
