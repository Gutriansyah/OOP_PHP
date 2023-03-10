<?php
require_once "data/Manager.php";

// * membuat object baru dari class parent
$manager = new Manager();
$manager->name = "joko";
// * menggunakan function dari class parent
$manager->sayHello("Giri");



// * membuat object baru dari class parent
$vice = new VicePresident();
$vice->name = "giri";
// * menggunakan function overiding dari class child
$vice->sayHello("gere");
