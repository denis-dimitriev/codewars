<?php

function descendingOrder(int $n): int {
    $toString = str_split(strval($n));
    rsort($toString, SORT_ASC);
    return intval(implode($toString));
}


print_r(descendingOrder(1345678));




