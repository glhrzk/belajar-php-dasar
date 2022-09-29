<?php

$names = ["Galih", "Rizki", "23"];

for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i]" . PHP_EOL;
}

// biasanya kita menggunakan forloop

foreach ($names as $name) {
    echo $name . PHP_EOL;
}
// foreach syntax

foreach ($names as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}
// foreach map key