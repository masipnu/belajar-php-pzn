<?php
// Menggunakan if statement

// Versi Sederhana, jika statement-nyya 1 baris
// if (expression) statement;
// if (1==1)echo "Halo";

// If
$nilai = 80;
$absen = 90;
if ($nilai >= 75 && $absen >= 75){
    echo "Selamat, anda lulus" . PHP_EOL;
}

// If-Else
$nilai = 70;
$absen = 90;
if ($nilai >= 75 && $absen >= 75){
    echo "Selamat, anda lulus" . PHP_EOL;
} else {
    echo "Maaf, anda tidak lulus" . PHP_EOL;
}

// If - Elseif
$nilai = 75;
$absen = 80;
if ($nilai >= 80 && $absen >= 80){
    echo "Nilai anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70){
    echo "Nilai anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60){
    echo "Nilai anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50){
    echo "Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E" . PHP_EOL;
}

// Syntax Alternatif
$nilai = 75;
$absen = 60;
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai anda A" . PHP_EOL;
 elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai anda B" . PHP_EOL;
 elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai anda C" . PHP_EOL;
 elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai anda D" . PHP_EOL;
 else  :
    echo "Nilai anda E" . PHP_EOL;
endif;