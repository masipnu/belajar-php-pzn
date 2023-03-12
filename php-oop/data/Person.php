<?php
class Person
{

/*
* Membuat variable
* Variabel bisa memiliki nilai default dan bisa dibuat berbeda-beda untuk masing-maasing objek,
* berbeda dengan kosntanta yang nilainya akan selalu sama untuk setiap objek dan tidak bisa dirubah.
* var = variable | string = tipe data (opsional) | "Indonesia" = default value
* tanda "?" di depan kata kunci string berguna untuk menbuat variable bisa diisi data null
*/
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

/*
 * Menambahkan fungsi/ method
 * */
    function sayHello(?string $name){
        if (is_null($name)){
            echo "My name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
    }
}