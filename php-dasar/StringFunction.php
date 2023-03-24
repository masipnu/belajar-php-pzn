<?php
// Menggunakan beberapa function suntuk string

// Menggabungkan array ke dalam string
var_dump(join(",",[1,2,3,4,5]));

// Memecah string menjadi array
var_dump(explode(" ","Eko Kurniawan Khannedy"));

// Mengubah huruf menjadi kapital
var_dump(strtoupper("eko kurniawan khannedy"));

// Mengubah huruf menjadi kecil
var_dump(strtolower("EKO KURNIAWAN KHANNEDY"));

// Menghapus whitespace di depan dan di belakang string
var_dump(trim("    eko     "));

// Memotong string
var_dump(substr("Eko Kurniawan Khannedy",0,3));