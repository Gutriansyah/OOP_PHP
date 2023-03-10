<?php

use Data\AnimalFood;
use Data\CatShelter;
use Data\Dog;
use Data\dogShelter;
use Data\Food;

require_once "data/Animal.php";
require_once "data/AnimalShellter.php";

// * memanggil class covariance
$catShelter = new CatShelter();
// * memanggil function addopt pada class CatShalter
// * function addop memenggil class cat 
$cat = $catShelter->addopt("tom");
// * memanggil function eat pada class cat yang di panggil pada function addopt
// * function eat memiliki parameter bertipe animal food
$cat->eat(new AnimalFood());

// * sama seperti penjelasan di atas
$dogShelter = new dogShelter();
$dog = $dogShelter->addopt("spike");
$dog->eat(new Food());
