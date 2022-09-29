<?php

$name = "Galih";


$otherName = &$name;
$otherName = "Rizki";

echo "Name  : $name" . PHP_EOL;
echo "Other : $otherName" . PHP_EOL;


function increment(int &$value)
{
    $value++;
}

$hitung = 1;

increment($hitung);
echo $hitung;

/**
 * jika tidak menggunaka pass by reference kita hanya mengirimkan values si variable
 * perbedaan jika kita menggunakan pass by reference, yaitu kita mengirimkan langsung address si variable (yang berisikan nilai) tersebut 
 */
