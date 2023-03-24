<?php
// Menggunakan function untuk array

$data = [1,2,3,4,5,6,7,8,9,10];

// Array Map
// Mengubah data array dengan function tertentu
$dataResult = array_map(fn(int $value) => $value * 10,$data);
print_r($dataResult);

// Mengurutkan data array secara descending
rsort($data);
print_r($data);

// Mengurutkan data array secara ascending
sort($data);
print_r($data);

// Mengambil index array
print_r(array_keys($data));

// Mengambil value array
print_r(array_values($data));

$person = [
    "firstname" => "Eko",
    "lastname" => "Kurniawan"
];

print_r(array_keys($person));
print_r(array_values($person));