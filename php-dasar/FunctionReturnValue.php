<?php

// Menggunakan Return Value pada function
function sum(int $first, int $second){
    $total = $first + $second;
    return $total;
}

$result = sum(3,4);
var_dump($result);

function getFinalValue(int $value){
    if ($value >= 80){
        return "A";
    } elseif ($value >= 70){
        return "B";
    } elseif ($value >= 60){
        return "C";
    } elseif ($value >= 50){
        return "D";
    } else {
        return "D";
    }
    echo "Ups" . PHP_EOL; // Tidak akan di-return
}

$final = getFinalValue(43);
var_dump($final);

// Return Type Declaration
// Berfungsi menentukan tipe data kembalian,
// agar lebih pasti nilai return-nya dan diketahui sejak awal
function tambah(int $a1, int $a2):int //ini bagian Return Type Declaration (opsiaonal)
{
    return $a1 + $a2;
}
$hasil = tambah(5,6);
var_dump($hasil);