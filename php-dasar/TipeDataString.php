<?php

echo 'Nama : ';
echo 'Eko Kurniawan Khannedy';
echo "\n\N";

echo "Name : ";
echo "Eko\t Kurniawan\t Khannedy\n";

echo <<<EKO

* HEREDOC *
Selamat datang di kelas belajar php
Ini adalah cara ke-3 untuk menampilkan string
Dengan Heredoc kita bisa membuat string dengan karakter enter
tanpa harus menggunakan escape character.


EKO;

echo <<<'EKO'
* NOWDOC *
Selamat datang di kelas belajar php
Ini adalah cara ke-3 untuk menampilkan string
Dengan Nowdoc kita bisa membuat string dengan karakter enter
tanpa harus menggunakan escape character.
EKO;