<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class data implements IteratorAggregate
{
    var string $fisrt = "firts";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";


    // * membuat array iterator
    // * untuk memanggil atau mengelurakan data yanf=g di inginkan/butuhkan
    // public function getIterator(): Traversable
    // {
    //     $array = [
    //         "Fisrt" => $this->fisrt,
    //         "Second" => $this->second,
    //         "Third" => $this->third,
    //         "Forth" => $this->forth
    //     ];

    // return new ArrayIterator($array);

    // $iterator = new ArrayIterator($array);
    // return $iterator;
    // }

    // * membuat array iterator menggunakan generator
    public function getIterator(): Traversable
    {
        yield "Fisrt" => $this->fisrt;
        yield "Second" => $this->second;
        yield "Third" => $this->third;
        yield "Forth" => $this->forth;
    }
}

// * melakukan object iteration(Perulangan)
$data = new data();
foreach ($data as $properti => $value) {
    echo " Property = " . $properti . " Value = " . $value . PHP_EOL;
}

// ! hanya bisa mengakses properti public 