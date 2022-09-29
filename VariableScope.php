<?php

$name = "Galih";

function sayName()
{
    global $name;
    echo "Hello $name" . PHP_EOL;
    echo $GLOBALS["name"];
}

sayName();
