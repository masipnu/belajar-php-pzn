<?php

// Penggunaan (dot) operator

$name = "Eko Kurniawan";

echo "Name : " . $name . PHP_EOL; // PHP_EOL adalah konstant php yang bernilai karakter enter (\n)
echo "Value : " . 100 . PHP_EOL;

// Konversi String

$nilaiString = (string)100;
var_dump($nilaiString);

$nilaiInteger = (int)"150";
var_dump($nilaiInteger);

$nilaiFloat = (float)"1.01";
var_dump($nilaiFloat);

// Jika nilai yang dimasukkan tidak valid, maka akan dirubah menjadi 0
$tidakValid = (int)"Bisa";
var_dump($tidakValid);

$tidakValid2 = (float)"Joko";
var_dump($tidakValid2);

// Array of Character
$nama = "Eko";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;

// Variable Parsing
// Menggabungkan / memasukkan variable ke dalam string (hanya menggunakan kutip 2)
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL; // cara sebelumnya
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL; // hasilnya sama (lebih efisien)

// Curly Braces
// Menggabung variable dengan string (tanpa spasi)
$var = "Car";
echo "This is {$var}s";