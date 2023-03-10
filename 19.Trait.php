<?php

use Data\Traits\Person;

require_once "data/SayGoodBye.php";

// * memanggil function traid
$traid = new Person();
$traid->goodBye("giri");
$traid->hello("bram");

// * menambahkan properti class yang di dapatkan dari trait
$traid->name = "play maker";
var_dump($traid);
$traid->run();
