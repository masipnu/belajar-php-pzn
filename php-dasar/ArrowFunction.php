<?php
// Menggunakan Arrow Function
// Anonymous Function yang lebih disederhanakan
// Kelebihannya bisa memanggil variable di luar function secara langsung,
// tanpa menggunakan kata kunci use
// Arrow function harus mengembalikan nilai / return

$firstName = "Eko";
$lastName = "Kurniawan";

// Percobaan menggunakan Anonymous Function
$anonymousFunction = function () use ($firstName,$lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

// Membuat versi Arrrow Function
$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();

// Arrow function bisa digunakan ketika ingin membuat function yang lebih sederhana