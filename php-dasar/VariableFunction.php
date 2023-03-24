<?php
// Menggunakan fitur variable function
// Mengakses function dari value sebuah variable
// Secara sederhana dapat diartikan = mengirim function ke dalam argumen function lain

function foo(){
    echo "Ini fungsi foo" . PHP_EOL;
}

function bar(){
    echo "Ini fungsi bar" . PHP_EOL;
}

$panggilFoo = "foo";
$panggilFoo();

$panggilBar = "bar";
$panggilBar();

// Penerapan variable function - callback

// Contoh-1
function sayHello(string $name,$filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
// Memanggil fungsi sayHello()
// dengan menambah parameter $filter dengan fungsi bawaan php
sayHello("Eko","strtoupper");
sayHello("Eko","strtolower");

// Contoh-2
function sayHi(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
// Meembuat contoh function untuk diparsing ke function sayHi()
function sampleFunction(string $name): string {
    return "Sample $name";
}
// MEmanggil fungsi sayHi() demgan paramater fungsi custom sampleFunction()
sayHi("Eko","sampleFunction");