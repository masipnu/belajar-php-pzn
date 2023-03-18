<?php
// Menggunakan Foreach

// Kasus awal : Menggunakan for untuk menampilkan array
// Repotnya perlu membuat iterasi manual untuk menentukan indeks array

$names = ["Eko","Kurniawan","Khannedy"];

for ($i=0 ; $i<count($names); $i++){
    echo "Index $i : $names[$i]" . PHP_EOL;
}

// Menggunakan Foreach
// Lebih sederhana
$names = ["Eko","Kurniawan","Khannedy"];

foreach ($names as $name){
    echo $name . PHP_EOL;
}

// Foreach dengan Key & Value
// Untuk array asosiatif
$nama = [
    "nama_depan"=>"Eko",
    "nama_tengah"=>"Kurniawan",
    "nama_belakang"=>"Khannedy"
];

foreach ($nama as $key => $value){
    echo "$key : $value" . PHP_EOL;
}

// Untuk array numerik dengan index
$buah = ["jeruk","mangga","apel"];
foreach ($buah as $index => $item) {
    echo "Buah ke $index : $item" . PHP_EOL;
}