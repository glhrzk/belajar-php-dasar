<?php
$i = 1;
while ($i <= 10) {
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
    $i++;
}
// ini adalah default syntax while loop

echo PHP_EOL;
$i = 10;
while ($i >= 1) :
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
    $i--;
endwhile;
// ini adalah syntax while loop dengan colon