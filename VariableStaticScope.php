<?php

function increement()
{
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increement();
increement();
increement();
increement();


/**
 * static akan melanjutkan values eksekusi  sebelumnya.
 */
