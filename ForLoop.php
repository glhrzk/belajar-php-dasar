<?php

for ($i = 1; $i <= 10; $i++) {
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
}

echo PHP_EOL;

for ($i = 10; $i >= 1; $i--) {
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
}
// ini adalah default syntax for loop

for ($i = 1; $i <= 10; $i++) :
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
endfor;

echo PHP_EOL;

for ($i = 10; $i >= 1; $i--) :
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
endfor;
// ini adalah syntax for loop dengan colon
