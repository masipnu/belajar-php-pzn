<?php

// Menggunakan Require
// Jika require error maka akan menghasilkan fatal error,
// program tidak akan dilanjutkan
require "Lib/MyFunction.php";
echo sayHello("Eko");

// Menggunakan Include
// Jika include error, maka akan menampilkan warning,
// tapi program tetap dilanjutkan

// include "Lib/MyFunction.php";
// echo sayHello("Budi");

// Alternative require => require_once, agar tidak terjadi error jika me-require ulang file yang sama
// Alternative inclide => include_once, agar tidak terjadi error jika men-include ulang file yang sama