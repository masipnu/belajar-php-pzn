<?php
// Menggunakan Goto
// Berfungsi untuk melompat ke kode program tertentu

// Kondisi Awal : Tanpa Goto
echo "Selamat Pagi" . PHP_EOL;
echo "Selamat Siang" . PHP_EOL;
echo "Selamat Sore" . PHP_EOL;
echo "Selamat Malam" . PHP_EOL;

// Menggunakan goto
goto malam; //langsung loncat ke "Selamat Malma"

pagi:
echo "Selamat Pagi" . PHP_EOL;

siang:
echo "Selamat Siang" . PHP_EOL;

sore:
echo "Selamat Sore" . PHP_EOL;

malam:
echo "Selamat Malam" . PHP_EOL;


// Penerapan goto pada perulangan
// bisa digunakan untuk menghentikan perulangan
// jika posisi goto nya berada di luar perulangan

$counter = 1;
while(true){
    echo "Urutan ke $counter" . PHP_EOL;
    $counter++;
    // Pengecekan untuk menghentikan perulangan
    if ($counter>10){
        //break;
        goto end;
    }
}
end:
echo "Perulangan selesai!";