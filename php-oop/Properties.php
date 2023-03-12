<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Eko";
$person->address = "Subang";
$person->country = "Malaysia";

//var_dump($person);
echo "\n";
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Budi";
$person2->address = "Jakarta";
//$person2->country = "Indonesia";

//var_dump($person2);
echo "\n";
echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;

$person3 = new Person();
$person3->name = "Hera";
$person3->address = null;
$person3->country = "New Zeland";

echo "\n";
var_dump($person3);
echo "\n";
echo "Name : $person3->name" . PHP_EOL;
echo "Address : $person3->address" . PHP_EOL;
echo "Country : $person3->country" . PHP_EOL;