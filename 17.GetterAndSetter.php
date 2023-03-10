<?php

require_once "data/Category.php";

$kategori = new Category();

// * mengubah data/properti class menggunakan function setter
$kategori->setName("Giri Gutriansyah");
$kategori->setExpensive(false);

// * menampilkan data menggunakan function getter
echo $kategori->getName() . PHP_EOL;
echo $kategori->isExpensive() . PHP_EOL;
