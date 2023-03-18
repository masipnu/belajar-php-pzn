<?php
// Menggunakan Do While Loop
// Perulangan ini akan dijalankan, minimal 1 kali
// Ini akan melakukan perulangan 1x dahulu (walaupun kondisinya false), baru dicek kondisinya lagi, jika true, maka perulangan akan dilanjutkan,
// tapi jika kondisi false maka perulangan akan dihentikan

// Percobaan
// Perulangan ini tidak akan memberikan output, karena kondisinya false
$counter = 100;
while ($counter<=10){
    echo "Ini perulangan ke $counter" . PHP_EOL;
    $counter++;
}

// Menggunakan Do While
// Perulangan hanya dijalankan sekali, ketika kondisi false,
// lalu dihentikan pada perulangan kedua, karena ternyata kondisinya ketahuan false
$counter = 100;
do {
echo "Ini perulangan ke $counter" . PHP_EOL;
$counter++;
} while ($counter<=10);