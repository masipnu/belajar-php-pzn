<?php
// While Loop
// Perulangan yang lebih sederhana daripada for, karena tidak ada init statement dan post statement
// yang dicek hanya bagian kondisi, jika kondisi terpenuhi, maka perulangan akan dijalankan
// init statement dan post statement harus dibuat manual

// Syntax Dasar
$counter = 1;
while ($counter<=10){
    echo "Ini perulangan ke $counter" . PHP_EOL;
    $counter++;
}

// Syntax Alternatif
$counter = 10;
while ($counter>=1):
    echo "Hitungan mundur ke $counter" . PHP_EOL;
    $counter--;
endwhile;