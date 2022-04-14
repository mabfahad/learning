<?php
function twoSum($nums, $target) {
        foreach ($nums as $key => $value) {
            unset($nums[$key]);
            if (($key2 = array_search($target - $value, $nums))) {
                return [$key, $key2];
            }
        }
        return [];
    }

print_r(twoSum([3,2,4],6));