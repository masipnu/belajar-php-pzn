<?php
// Menggunakan shortcut operator penugasan =

// Konsep
// $a = 1;
// $b = 2;
// $a = $a + $b; => $a += $b;
// $a = $a - $b; => $a -= $b;
// $a = $a * $b; => $a *= $b;
// $a = $a / $b; => $a /= $b;
// $a = $a % $b; => $a %= $b;

// Contoh
$total = 0;

$jeruk = 5000;
$ayam = 10000;
$teh = 3000;

$total += $jeruk;
$total += $ayam;
$total += $teh;

echo "Harga total = Rp. $total";