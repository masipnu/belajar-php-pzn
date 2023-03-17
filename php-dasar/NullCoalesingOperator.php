<?php
// Menggunakan Null Coalesing Operator

// Syntax Umum/ Awal
$data = [
    "action" => "Create"
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// Syntax menggunakan Null Coleasing Operator
$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;