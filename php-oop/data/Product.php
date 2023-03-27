<?php

/*
 * Visibility
 * Public       : bisa diakses dari manapun (class, sub-class, luar class)
 * Protected    : bisa diakses dari class dan sub-class
 * Private      : hanya bisa diakses dari dalam class
 */

class Product
{
    protected string $name;
    protected int $price;

     public function __construct(string $name, int $price)
     {
         $this->name = $name;
         $this->price = $price;
     }

     public function getName():string
     {
         return $this->name;
     }

     public function getPrice():int
     {
         return $this->price;
     }
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}