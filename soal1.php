<?php
$arr = [1, 2, 3, 4, 5, 6, 8, 9, 10];
$arr2 = [];
$some = array_search(1, $arr);
for ($i = 1; $i < 11; $i++) {
    $check = array_search($i, $arr, true);
    if (gettype($check) == "integer") {
        continue;
    } else {
        $arr2[] = $i;
    }
}
echo json_encode($arr2);
