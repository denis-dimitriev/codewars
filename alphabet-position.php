<?php

function alphabet_position(string $s): string {
    $strToArr = str_split(strtolower($s));
    $alphabet = range('a', 'z');
    array_unshift($alphabet, "!");
    $result = [];
    foreach ($strToArr as $value) {
        $res = array_search($value, $alphabet);
        if ($res && $res !== 0) {
            $result[] = $res;
        }
    }
    return implode(" ", $result);
}