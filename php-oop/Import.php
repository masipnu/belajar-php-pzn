<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$Conflict1 = new Conflict();
$Conflict2 = new Data\One\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;