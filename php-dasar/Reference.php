<?php
/*
 * Reference
 * Sama halnya ketika membuat shortcut untuk sebuah file, atau alias
 * 2 variable dengan value yang sama
 */

// Assign by Reference
$name = "Eko";  // Menyiapkan variable
$otherName = &$name; // Membuat reference dengan tanda &
$otherName = "Budi"; // Mengganti value dengan reference
echo $name . PHP_EOL; // Cek value

// Pass by Reference
function increment(int &$value){ //passing reference ke dalam argument
    $value++;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

// Returning Reference
function &getvalue(){
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;