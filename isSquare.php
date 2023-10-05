<?php

function isSquare($n): bool
{
    if ($n < 0) {
        return false;
    }

    $sqrt = sqrt($n);

    if ($n == $sqrt ** 2) {
        return true;
    }

    return false;
}
