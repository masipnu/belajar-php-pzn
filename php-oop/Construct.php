<?php

require_once "data/Person.php";

$eko = new Person("Eko","Subang");
var_dump($eko);

$joko = new Person("Joko",null);
var_dump($joko);
