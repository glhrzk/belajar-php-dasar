<?php

$data = [
    "action" => null,
    "take" => "yes"
];

if (isset($data["take"])) {
    $action = $data["take"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;
// biasanya kita menggunakan perintah diatas

$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;
// kita bisa menyingkatnya dengan fungsi Null Coalescing Operator
