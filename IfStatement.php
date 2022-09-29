<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 70 && $absen >= 90) {
    echo "Selamat anda lulus" . PHP_EOL;
} else {
    echo "Anjay.. anda ngulang bayar Full 1 semester" . PHP_EOL;
}

// default if statement syntax

if ($nilai >= 70 && $absen >= 90) :
    echo "Selamat anda lulus" . PHP_EOL;
else :
    echo "Anjay.. anda ngulang bayar Full 1 semester" . PHP_EOL;
endif;

// syntax if statement dengan colon