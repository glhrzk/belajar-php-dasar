<?php

$i = 1;

while (true) {
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
    $i++;

    if ($i > 10) {
        break;
    }
}
