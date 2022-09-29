<?php

function sayHello($name = "Anonymoys")
{
    echo "Helo $name, this is function" . PHP_EOL;
};

sayHello("Galih");
sayHello("uJanG");


/*
    aturan pembuatan default argument, harus di masukan ke argument/parameter belakang jika memiliki dua argument
*/