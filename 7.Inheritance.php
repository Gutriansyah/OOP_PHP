<?php
require_once "data/Manager.php";

// * memanggil parent class
$manager = new Manager();
$manager->name = "object";
$manager->sayHello("function");

// * memanggil child class
$vice = new VicePresident();
$vice->name = "vice president";
$vice->sayHello("vice fn");
