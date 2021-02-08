<?php


$target_jarak = 500;
$total_jarak_tempuh = 500;
$tangki = 180;
$jarak_lewat = 0;
$harga_total = 0;
$jarak_terlewat = 0;

$array = [100, 140, 150, 200, 330, 360, 400];
$array2 = [1000, 2000, 5000, 1000, 6000, 4000, 1000];
$z = [];
foreach ($array as $key => $value) {

  $z[$value] = $array2[$key];
}
asort($z);


foreach ($z as $key => $value) {
  if ($jarak_terlewat + $key == $target_jarak) {
    break;
  }

  if ($key - $jarak_terlewat > 180 || $key < $jarak_terlewat) {

    continue;
  }

  $jarak_lewat = $key - $jarak_terlewat;
  $jarak_terlewat += $jarak_lewat;

  $tangki = $jarak_lewat - $key;
  $total_jarak_tempuh = $total_jarak_tempuh - $key;
  if ($tangki < 180) {

    $harga_total += $jarak_lewat * $value;
    $tangki = 180;
  }
}
echo $harga_total . " = Total Harga Termurah";
