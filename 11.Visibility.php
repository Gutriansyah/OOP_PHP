<?php

require_once "data/Produck.php";

$product = new Produk("apple", 20000);

// * menampilkan property private menggunakan fn
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;


// * memanggil child function yang menggunakan parent property 
$rest = new AnakProduk("jambu", 800);
$rest->info();
