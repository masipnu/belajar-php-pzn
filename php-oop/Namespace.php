<?php

// Memanggil namespace Data\One dan Data\Two
require_once "data/Conflict.php";

// Memanggil namespace helper
require_once "data/Helper.php";

$Conflict1 = new \Data\One\Conflict();
$Conflict2 = new \Data\Two\Conflict();

//var_dump($Conflict1);
//var_dump($Conflict2);

// Menampilkan konstanta yang berada di dalam namespace helper
echo Helper\APPLICATION . PHP_EOL;

// Memanggil fungsi yang berada di dalam namespace helper
Helper\helpMe();