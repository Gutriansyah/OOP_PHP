<?php

require_once "data/Person.php";

// * membuat object
$person = new person("giri", "riau");

// * mengisi properti
$person->name = "play maker";
$person->address = "Jl karaang anyar 1";
$person->country = "Indonesia";

var_dump($person);

// * menampilkan isi properti
echo $person->name . PHP_EOL;
echo $person->address . PHP_EOL;
echo $person->country . PHP_EOL;

$person2 = new Person("giri", "riau");
$person2->name = "bram";
$person2->address = "jl siak";
$person2->country = "indonesia";

var_dump($person2);

$person3 = new Person("giri", "riau");
$person3->name = 1000;
$person3->address = null;

var_dump($person3);
