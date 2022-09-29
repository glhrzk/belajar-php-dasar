<?php

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

function factorialRecurive(int $value): int
{
    if ($value <= 0) {
        return 1;
    } else {
        return $value * factorialRecurive($value - 1);
    }
}

var_dump(factorialRecurive(5));
