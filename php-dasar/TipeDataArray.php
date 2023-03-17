<?php
// Menggunakan Array

// Cara-1
$values = array(1,2,3,4,5.5);
var_dump($values);

// Cara-2
$nama = ["Eko","Kurniawan","Khannedy"];
var_dump($nama);

// Mengecek indeks tertentu
var_dump($nama[0]);

// Mengganti nilai indeks tertentu
$nama[0] = "Budi";
var_dump($nama[0]);

// Menghapus indeks array
unset($nama[1]);
var_dump($nama);

// Menambah indeks dan value pada urutan terakhir
$nama[] = "Joko";
var_dump($nama);

// Menghitung jumlah isi array
echo count($nama);
echo "\n";

// Menggunakan array Asosiatif
// di bahasa pemrograman lain disebut sebagai map
$eko = array(
    "id" => "Eko",
    "name" => "Kurniawan",
    "age" => "30"
);

$budi = [
    "id"=>"budi",
    "name"=>"Santoso",
    "age"=>32
];
var_dump($eko);
var_dump($budi);

// Nested Array/ Array bersarang
$joko = [
    "id"=>"joko",
    "name"=>"Joko Budianto",
    "age"=>35,
    "address"=>[
        "city"=>"Jakarta",
        "country"=>"Indonesia"
    ]
];
var_dump($joko);
echo "city of joko is : ";
echo $joko["address"]["city"];