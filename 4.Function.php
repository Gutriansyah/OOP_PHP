<?php

require_once "data/Person.php";


$variabel = new Person("Giri", "riau");
$variabel->name = "sandika galih";
$variabel->sayHello("Giri Gutriansyah");


// $bram = new Person();
// $bram->name = "Giri Gutriansyah";
// $bram->sayHello(null);


echo Person::AUTHOR;
