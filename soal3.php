<?php

$x  = $y = $a = $z = [];

$count = 1;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j > 3) {
            $y[$j] = $count;
        } else {
            $x[$j] = $count;
        }
        $count = $count + 1;
    }

    $a[] = $x;
    $b[] = $y;
}
$z = array_merge($a, $b);
echo json_encode($z);
