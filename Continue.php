<?php

for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "Hello countine ke-$i" . PHP_EOL;
}
