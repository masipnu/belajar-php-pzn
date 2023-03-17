<?php
// Menggunakan operator array
// Sama halnya dengan operator perbandingan, namun diterapkan untuk membandingkan array

// Penggabungan (Union)
$nama_depan=[
    "nama_depan"=>"Budi"
];

$nama_belakang=[
    "nama_depan"=>"Joko", //value ini akan diabaikan jika digabung dengan aray pertama, karena di array pertama sudah ada
    "nama_belakang"=>"Santoso"
];

$nama_lengkap = $nama_depan + $nama_belakang;
var_dump($nama_lengkap);

// Perbandingan Array
$orang1 = [
    "nama"=>"Eko",
    "alamat"=>"Jakarta"
];
$orang2 = [
    "alamat"=>"Jakarta",
    "nama"=>"Eko"
];

var_dump($orang1 == $orang2); // true karena isi index array-nya sama
var_dump($orang1 === $orang2); // false karena urutan index array-nya berbeda