<?php

$i = 1;

while (true) {
    echo "Ini adalah for loop ke-$i" . PHP_EOL;
    $i++;

    if ($i > 10) {
        goto end;
    }
}

end:
echo "ini adalah akhir while dengan goto" . PHP_EOL;
