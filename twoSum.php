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

print_r(twoSum([2,7,4,5],9));