<?php
// Menggunakan Operator Logika
/*
 * &&
 * and
 * or
 * xor
 * !true
 * !false
*/

var_dump(true && true);
var_dump(true and true);

var_dump(true || true);
var_dump(true || false); // true ataupun false akan dianggap true, kecuali jika dua-duanya false, maka jadi false

var_dump(true xor true);
var_dump(true xor false); // harus salah satu benar dan salah

var_dump(!true);
var_dump(!false);