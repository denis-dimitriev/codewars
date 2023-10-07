<?php

function is_uppercase($str): bool
{
    return strtoupper($str) === $str;
}

echo is_uppercase("#BOB WALKS HIS DOG ???? EVERY DAY...");
