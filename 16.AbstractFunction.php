<?php

use Data\Cat;

require_once "data/Animal.php";


$cat = new Cat();
$cat->name = "tom";
// * memanggil overridding abstract function
$cat->run();
