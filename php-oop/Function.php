<?php

require_once "data/Person.php";

$eko = new Person("Eko","Subang");
$eko->name = "Eko";
$eko->sayHello("Budi");
$eko->info();

$joko = new Person("Joko",null);
$joko->name = "Joko";
$joko->sayHello(null);
$joko->info();