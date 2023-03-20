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