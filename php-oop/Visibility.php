<?php

require_once "data/Product.php";

$product = new Product("Apple",2000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$tahu = new ProductDummy("Tahu",1000);
$tahu->info();