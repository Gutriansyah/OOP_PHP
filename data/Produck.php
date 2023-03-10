<?php

class Produk
{
    // * menambahkan visibility pada property
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // * fn digunakan untuk mengambil value property private
    public function getName(): string
    {
        return $this->name;
    }

    // * fn digunakan untuk mengambil value property private
    public function getPrice(): int
    {
        return $this->price;
    }
}


class AnakProduk extends Produk
{
    public function info()
    {
        // * menggunakan propeti perent yang bersifat protected
        echo $this->name . PHP_EOL;
        echo $this->price . PHP_EOL;
    }
}
