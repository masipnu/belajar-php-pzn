<?php
// Menggunakan variable local scope

/*
 * Variable local adalah variable yang berada di dalam function
 * variable ini hanya bisa diakses dari dalam function
 * tidak bisa diakses dari luar function
 * ataupun dari function lain
 */

function createName(){
    $name = "Eko"; // local scope
}

createName();

echo $name . PHP_EOL;