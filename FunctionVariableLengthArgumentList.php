<?php

function sumAll(array $values)
{
    $total = 0;
    foreach ($values as $nilai) {
        $total += $nilai;
    }

    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

// $data = [50, 20, 70, 20, 70, 15];
// sumAll($data);
echo "array biasa : ";
sumAll($data = [50, 20, 70, 20, 70, 15]);
// biasanya kita membuat seperti itu.

function sumArray(...$values)
{
    $total = 0;
    foreach ($values as $nilai) {
        $total += $nilai;
    }

    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}
echo "array length variable : ";
sumArray(50, 20, 70, 20, 70, 15);
// sekarang lebih singkat jika menggunakan fungsi ini
// fungsi variable length argument list hanya bisa digunakan di argument terakhir