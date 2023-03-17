<?php
// Menggunakan Switch
// Sama saja dengan if, tapi disarankan jika expresinya sederhana.
// Switch hanya mendukung operator ==


// Syntax Dasar
$nilai = "E";
switch ($nilai){
    case "A" :
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B" : // menggabungkan 2 kondisi B dan C
    case "C" :
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    case "E" :
        echo "Mungkin anda salah jurusan". PHP_EOL;
}

// Syntax Alternatif
$nilai = "C";
switch ($nilai) :
    case "A" :
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B" : // menggabungkan 2 kondisi B dan C
    case "C" :
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    case "E" :
        echo "Mungkin anda salah jurusan". PHP_EOL;
endswitch;