<?php
// Menggunakan Anonymous Function
// Dalam bahasa pemrograman lain disebut closure
// Disebut juga function tanpa nama
// Kita bisa membuat function tanpa nama, tapi langsung memasukkan nilainya ke dalam variable

// Contoh-1
$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
}; // karena berupa statement variable, maka ditambahkan semicolon

$sayHello("Eko");
$sayHello("Joko");

// Contoh-2
// Konsepnya hampir sama dengan Variable-Function
// Memasukkan function langsung ke dalam parameter function
function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;
}
// Memanggil function langsung ke dalam argument function
sayGoodBye("Eko", function (string $name):string{
    return strtoupper($name);
});

// Contoh-3
// Memanggil function ke dalam argument function berupa anonymous function

// Menyiapkan Anonymous Function
$filterFunction = function (string $name):string{
    return strtoupper($name);
};

sayGoodBye("Joko",$filterFunction);

// Contoh-4
// Mengakses variable di luar closure/ anonymous Function
// Defaultnya, closure tidak bisa mengakses variable di luar function,
// namun bisa diatasi dengan kata kunci use, diikuti nama variable-nya

$firstName = "Eko";
$lastName = "Kurniawan";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloEko();

// value $firstName dan $lastName tidak bisa dirubah
// Valuenya hanya akan diisi ke dalam fungsi sayHelloEko saat pertama kali

// Inisiasi value variable berikut akan diabaikan oleh function $sayHelloEko()
$firstName = "Budi";
$lastName = "Irawan";

$sayHelloEko();