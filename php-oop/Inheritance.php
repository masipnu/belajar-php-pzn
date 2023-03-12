<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Eko";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "Andre";
$vp->sayHello("Doremi");