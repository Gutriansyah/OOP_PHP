<?php
require_once "data/Programmer.php";

//* membuat object dari class yang memliliki type data programer dari class programer
$company = new Company();

// * mengisi value property programer dengan class programer
$company->programmer = new Programmer("giri");
var_dump($company);

// * mengisi value property programer dengan class child programer
$company->programmer = new BackendProgrammer("bram");
var_dump($company);

// * mengisi value property programer dengan class child programer
$company->programmer = new FrontendProgrammer("chiko");
var_dump($company);

// * memanggil function dengan argument berype programer dari class programer
sayHelloProgrammer(new Programmer("giri"));
sayHelloProgrammer(new FrontendProgrammer("bram"));
sayHelloProgrammer(new BackendProgrammer("chiko"));
