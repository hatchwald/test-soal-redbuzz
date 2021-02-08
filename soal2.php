<?php
$x = array(1, 5, 6, 1, 0, 1);
$x2 = array_unique($x);

$y = 6;
$z = array();

foreach ($x2 as $key => $value) {
    foreach ($x as $key2 => $value2) {
        if ($value + $value2 == $y) {
            if (!in_array([$value, $value2], $z)) {

                $z[] = [$value, $value2];
            }
        }
    }
}


echo json_encode($z);
