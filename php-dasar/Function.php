<?php
// Menggunakan Function
// Tidak seperti di bahasa pemrograman lain, function php bisa dibuat di mana saja

// Membuat Fucntion
function sayHello(){
    echo "Halo kamu!" . PHP_EOL;
}

// Memanggil fucntion
sayHello();

// Kasus lain
// Function bisa dibuat di dalam if
$buat = true;
if ($buat){
    function sapa(){
        echo "Apa kabar!" . PHP_EOL;
    }
}
// memanggil fungsi sapa()
// jika $buat=false, maka fungsi sapa tidak bisa dipanggil,
// karena fungsi sapa hanya akan diaktifkan/ dianggap ada ketika $buat=true
sapa();