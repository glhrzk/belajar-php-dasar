<?php

$nilai = "A";

if ($nilai == "A") {
    echo "Anda lulus dangan sangat baik." . PHP_EOL;
} elseif ($nilai == "B" or $nilai == "C") {
    echo "Anda lulus." . PHP_EOL;
} elseif ($nilai == "D") {
    echo "Anda tidak lulus." . PHP_EOL;
} else {
    echo "Mungkin anda salah jurusan." . PHP_EOL;
}

switch ($nilai) {
    case "A":
        echo "Anda lulus dangan sangat baik." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus." . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus." . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan." . PHP_EOL;
}
// default switch statement syntax

switch ($nilai):
    case "A":
        echo "Anda lulus dangan sangat baik." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus." . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus." . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan." . PHP_EOL;
endswitch;
// syntax switch statement dengan colon