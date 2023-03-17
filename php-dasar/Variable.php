<?php

// Variable

$name = "Eko";
$age = 30;

echo "Variable Standar \n";
echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Variable Variables
// Membuat nama variable berdasarkan value/ nilai dari variable lain

$buah = "jeruk";
$$buah = "manis";

echo "\nVariable Variables \n";
echo "\$buah : ";
echo $buah;
echo "\n";

echo "\$jeruk : ";
echo $jeruk;