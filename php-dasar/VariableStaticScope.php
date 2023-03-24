<?php
/*
 * Secara default, variable di dalam function bersifat local
 * dan akan langsung hilang nilainya ketika function selesai dijalankan
 * Agar value dari variable local tersebut tidak hilang dan bisa dipakai untuk selanjutnya
 * kita bisa menggunakan kata kunci static
 */
function increment(){
    static $counter = 1; //variable ini akan tetap ada setelah function selesai dijalankan
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();