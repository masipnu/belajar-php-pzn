<?php

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }

    /*
     * keyword parent
     * Karena function getCorner() pada class Rectangle menimpa function getCorner dari parent-nya,
     * maka kita bisa menggunakan kata kunci parent untuk mengakses function getCorner() milik parent / class Shape
     */
    public function getParentCorner()
    {
        return parent::getCorner();
    }
}