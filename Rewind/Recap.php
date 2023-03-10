<?php

require_once "ClassRecap.php";
require_once "Morph.php";

// $parent = new NamaClass("satu", "dua", "tiga");
// $parent->properti1 = "di tukar";
// $parent->namaSaya("bebek");

// $child = new Child("satu", "dua", "tiga");
// $child->properti1 = "tertukar";
// $child->namaSaya("kucing");

// $kendaraan = new Kendaraan("Kendaraan Umum");
// var_dump($kendaraan);


$mesin = new Mesin();
$mesin->kendaraan = new Kendaraan("militer");
var_dump($mesin);
$mesin->jenisKendaraan(new Kendaraan("umum"));

asd(new Kendaraan("parent"));
