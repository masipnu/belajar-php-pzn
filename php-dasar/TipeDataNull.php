<?php
// Tipe Data Null

$name = "Eko";
$name = NULL;

$age = null;

echo "\$name : ";
echo $name;
echo "\n";

echo "\$age : ";
echo $age;
echo "\n";

// Mengecek apakah variable null
echo "Is Variable Null ? : ";
var_dump(is_null($name));

// Variable yang belum didefinisikan tidak bisa dicek menggunakan is_null
//var_dump(is_null($halo));;

// Menghapus variable menggunakan => unset()
//unset($name);
//var_dump($name);

// Mengecek apakah variable tertentu ada dan tidak bernilai null => isset()
// Contoh yang null
echo "\$name : ";
var_dump(isset($name));
echo "\n";

// Contoh yang tidak null
$buah = "Jeruk";
echo "\$buah : ";
var_dump(isset($buah));
