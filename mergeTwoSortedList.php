<?php

function mergeTwoLists($list1, $list2)
{
    $results = [];
    foreach ($list1 as $key=>$value) {
        if ($list1 == $list2) {
            $results[] = $value;
            $results[] = $list2[$key];
        }
        elseif($list1 > $list2) {
            $results[] = $list2[$key];
        } else {
           $results[] = $value;
           $results[] = $list2[$key];
        }
    }
    return $results;
}
print_r(mergeTwoLists([1,2,4],[1,3,4]));
