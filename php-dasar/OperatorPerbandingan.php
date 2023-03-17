<?php
// Menggunakan Operator Perbandingan
/*
 * == Sama dengan (Tidak harus identik tipe datanya, bisa terjadi type jugling)
 * != Tidak Sama dengan
 * === Sama dengan (identik tipe datanya)
 * !== Tidak sama dengan (tidak identik tipe datanya juga)
 * <> Tidak sama dengan (tidak harus identik)
 * < Lebih kecil
 * <= lebih kecil atau sama dengan
 * > lebih besar
 * >= lebih besar atau sama dengan
 * */

var_dump("5"==5);
var_dump("5"===5);
var_dump("5"!=4);
var_dump("5"!==4);
var_dump(5<>4);
var_dump(5<5);
var_dump(5<=5);
var_dump(5>5);
var_dump(5>=5);
