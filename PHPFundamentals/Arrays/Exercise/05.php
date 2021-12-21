<?php
$nums = array_map('intval', explode(' ', readline()));

for ($i = 0; $i < count($nums); $i++) {
    $bigger = true;
    for ($idx = $i + 1; $idx < count($nums); $idx++) {
        if ($nums[$i] <= $nums[$idx]) {
            $bigger = false;
            break;
        };
    };
    if ($bigger) {
        echo "$nums[$i] ";
    };
};