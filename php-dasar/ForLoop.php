<?php
// Perulangan menggunakan For
// Format
// for (init_statement ; kondisi ; post_statement){
// Blok perulangan
// }
// init statement dijalankan saat awal perulangan
// post statement dijalankan setiap selesai perulangan
// init_statement, kondisi dan post statement boleh tidak diisi, efekmnya perulangan akan dijalankan terus, karena dianggap kondisinya true

// Perulangan tanpa henti
// for (;;){
//    echo "Halo";
// }

// Format Dasar
$counter = 1;
for (;$counter<=10;){
    echo "Ini adalah perulangan ke $counter" . PHP_EOL;
    $counter++;
}

// Format Simpel
for ($counter=1;$counter<=15;$counter++){
    echo "Urutan ke $counter" . PHP_EOL;
}

// Syntax Alternatif
for ($counter=10;$counter>=1;$counter--):
    echo "Hitungan mundur ke $counter" . PHP_EOL;
endfor;