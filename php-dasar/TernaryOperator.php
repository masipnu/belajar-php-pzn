<?php
// Menggunakan Ternary Operator
// Mempersingkat syntax untuk 2 opsi value

// Syntax awal
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "Hi bro!";
} else {
    $hi = "Hi sis!";
}

echo $hi . PHP_EOL;

// Syntax menggunakan ternary operator
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi sis!";

echo $hi . PHP_EOL;