<?php

function getFibonacci($start,$end) {
    $results = [];

    $count = 0;
    for ($i=$start;$i<=$end;$i++) {
        if (empty($results) || count($results) < 2 ) $results[]=$i;
        else $results[] = $results[$count-2] + $results[$count-1];
        $count++;
    }
    return $results;
}

print_r(getFibonacci(10,20));