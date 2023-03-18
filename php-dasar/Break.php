<?php
// Menggunakan break
// Berfunsi untuk menghentikan perulangan secara mutlak

// Perulangan tanpa henti, karena kondisi true
//    $counter = 100;
//    while(true){
//        echo "Urutan ke $counter" . PHP_EOL;
//        $counter++;
//    }

// Penerapan Break
$counter = 100;
while(true){
    echo "Urutan ke $counter" . PHP_EOL;
    $counter++;

    // Pengecekan untuk menghentikan perulangan
    if ($counter>1000){
        break;
    }
}