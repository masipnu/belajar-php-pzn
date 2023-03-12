<?php

require_once "data/Person.php";

$eko = new Person("Eko","Subang");
var_dump($eko) . PHP_EOL;

$joko = new Person("Joko",null);
var_dump($joko) . PHP_EOL;
