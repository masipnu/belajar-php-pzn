<?php
// Menggunakan Continue
// Berfungsi untuk melewati perulangan saat ini/ skip perulangan tertentu
// dan melanjutkan ke perulangan berikutnya

// Kasus Awal : Perulangan semua
for ($counter=1 ; $counter<=10 ; $counter++){
    echo "Counter : $counter" . PHP_EOL;
}

// Custom : Perulangan Ganjil
for ($counter=1 ; $counter<=10 ; $counter++){
    if ($counter % 2 == 0){
        continue;
    }
    echo "Counter Ganjil : $counter" . PHP_EOL;
}

// Custom : Perulangan Genap
for ($counter=1 ; $counter<=10 ; $counter++){
    if ($counter % 2 == 1){
        continue;
    }
    echo "Counter Genap : $counter" . PHP_EOL;
}