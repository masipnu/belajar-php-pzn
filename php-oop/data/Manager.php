<?php

class Manager
{
    var string $name;

    function sayHello(string $name):void
    {
        echo "Hi $name, My name is $this->name as Manager" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    /*
     * Ini adalah Function Overriding
     * Function ini akan menimpa function dari class parent nya yaitu sayHello()
     * maka function sayHello() dari class Manager akan diabaikan
     */
    function sayHello(string $name):void
    {
        echo "Hi $name, My name is $this->name as Vice President" . PHP_EOL;
    }
}