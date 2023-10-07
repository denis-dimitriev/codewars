<?php


function solution($str, $ending): bool {
    $fromIndex = strripos($str, $ending);
    $substr =  substr($str, $fromIndex);
    return $substr === $ending;
}
