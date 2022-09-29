<?php

function sum(int $first, int $last)
{
    $total = $first + $last;
}

$hasil = sum(100, "10");
var_dump($hasil);

// sebagai perbanding jika mengunakan fungsi diatas tanpa mengembalikan nilai, fungsinya akan berniilai NULL

function sumAll(int $first, int $last): int
{
    $total = $first + $last;
    return $total;
}

$hasil = sumAll(100, "10");
var_dump($hasil);

// jika menggunakan return value maka fungsi tersebut mengembalikan nilai.


function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "1";
    }
}

$galih = 100;
$nilaiGalih = getFinalValue($galih);
$coba = getFinalValue(40);
var_dump($nilaiGalih);
var_dump($coba);

// return type declarations: untuk mendeklarasikan tipe data kembalian function, setelah kurung() kita bisa tambahkan : diikuti tipe data kembaliannya.
// berfungsi agar tidak salah saat input nilai ke fungsi