<?php
// Membuat Konstanta
// Konstanta akan selalu sama setiap objek (tidak bisa diganti)
// define adalah key untuk membuat konstanta di php versi 7 ke bawah
// Untuk lebih mudah. kita gunakan kata kunci const khusus php versi 7 ke atass
    const AUTHOR = "Programmer Zaman Now";

    define("APPLICATION","Belajar OOP PHP");

    const APP_VERSION = "1.0.0";

    echo APPLICATION . PHP_EOL;
    echo APP_VERSION . PHP_EOL;