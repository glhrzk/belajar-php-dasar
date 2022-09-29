<?php

$name = "Galih rizkiansyah";
echo "Name : " . $name . PHP_EOL;
// dot operator, menggabungkan string

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.001";
var_dump($valueFloat);
// jika input data salah maka di konversi menjadi 0


echo "\n";
$name = "Galih";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
// mengakses index string


echo "Hello $name, Selamat belajar PHP" . PHP_EOL;
// variabel parsing tanpa menggunakan dot operator

$var = "var";
echo "This is $var" . PHP_EOL;

echo "This is {$var}s" . PHP_EOL;
// curl brace, menambakan kata/value dari sebuah variable