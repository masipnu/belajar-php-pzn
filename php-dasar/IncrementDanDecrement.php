<?php
//Menggunakan Increment dan Decrement

$a = 10;

//    ++$a Pre-Increment
//    $a++ Post-Increment
//    --$a Pre-Decrement
//    $a-- Post-Decrement

/*
Jika ingin memasukkan nilai increment/ decrement ke dalam variabel,
maka sebaiknya menggunakan post-increment/ post-decrement,
namun jika hanya ingin melakukan increment/ decrement maka bebas,
boleh post/ pre
*/

$a++;
var_dump($a);

$b = ++$a;
var_dump($b);

var_dump($a);
$c = $a++;