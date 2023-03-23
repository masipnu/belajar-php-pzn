<?php
// Menggunakan function argument

// Function tanpa default argument
function sayHello($name){
    echo "Hello $name" . PHP_EOL;
}

sayHello("Eko");
sayHello('Budi');

// Function dengan default argument
function sapa($nama = "Kamu"){
    echo "Hai $nama !" . PHP_EOL;
}

sapa();
sapa("Toni");

// Jika argument function lebih dari satu,
// maka default argument sebaiknya ditempatkan di belakang, bukan didepan
function sayhi($firstName, $lastName = ""){
    echo "Hi $firstName $lastName !" . PHP_EOL;
}

sayhi("Rani");
sayhi("Rike","Arum");

// Function dengan tipe data fix
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
    return $total;
}

$i=sum(3,2);

// Konversi tipe data / type jugling
// Jika tipe data memungkinkan untuk diconvert,
// maka php akan menconvert (dalam kasus ini menjadi integer) dan memprosesnya
sum(true,false);
sum(20,"15");

// Tipe data array tidak bisa diconvert
//sum([],[]);

// Variable length argument list
// Cara mudah menentukan argument function berupa array

// Contoh belum menggunakan Variable length argument list
function sumAll(array $values){
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ",$values) . " = $total" . PHP_EOL;
}
// Pemanggilan fungsi harus menambahkan argumen berupa array
sumAll([5,6,7,4,5]);

// Contoh sudah menggunakan Variable length argument list
function sumTotal(...$values){
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ",$values) . " = $total" . PHP_EOL;
}
// Ketika memanggil fungsi tidak perlu menambahkan argumen berupa array
sumTotal(1,2,3,4,5);

// Jika terlanjur membuat array sebagai argument,
// dalam pemanggilan fungsi cukup ditambah ... di depan argumen
$bilangan = [5,6,7,8,9];
sumTotal(...$bilangan);