<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy as Dump, Sample};
use function Helper\{HelpMe};

$Conflict = new Conflict1();
$Dummy = new Dump();
$Sample = new Sample();

helpMe();