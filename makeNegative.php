<?php

/*
 * In this simple assignment
 * you are given a number and have to make it negative.
 * But maybe the number is already negative?
 * */

function makeNegative($num): int | float {
    if ($num < 0 || $num === 0) {
        return $num;
    }

    return -$num;

}

echo makeNegative(-1);