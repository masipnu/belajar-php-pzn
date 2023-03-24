<?php
/*
 * Variable Scope ada 3 :
 * Global : berada di luar function
 * Local : berada di dalam function
 * Static
 */

// Contoh-1
// Variable Global
$name = "Eko";  // ini adalah variable global
function sayHello(){
    echo "Hello $name" . PHP_EOL; //memanggil variable $name akan error
}
sayHello(); // error

// Contoh-2
// Cara akses global scope dari dalam function, menggunakan keyword global
$name = "Eko";
function sayHi(){
    global $name; //global  keyword
    echo "Hi $name" . PHP_EOL;
}
sayhi();

// Contoh-3
// global scope dengan variable $GLOBALS
// setiap variable yang dibuat di dalam scope global,
// secara otomatis akan dimasukkan ke dalam array $GLOBALS

$buah = "Jeruk";
function ambilBuah(){
    echo "Ambil {$GLOBALS['buah']}" . PHP_EOL;
}
ambilBuah();