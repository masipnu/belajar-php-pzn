<?php
// Menggunakan Callable Function
// Menggunakan tipe data callable / bisa dipanggil
function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

// Memanggil dengan Variable Function
sayHello("Eko","strtoupper");
sayHello("Joko","strtolower");

// Memanggil dengan Anonymous Function
sayHello("Eko", function (string $name): string {
    return strtoupper($name);
});

// Memanggil dengan Arrow Function
sayHello("Eko", fn($name) => strtolower($name));