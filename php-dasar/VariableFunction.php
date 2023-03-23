<?php
// Menggunakan fitur variable function
// Mengakses function dari value sebuah variable

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