<?php


namespace Data;

require_once "Animal.php";

interface AnimalShelter
{
    // * return value tipe data animal (dari class animal)
    function addopt(string $name): Animal;
}

// * covariance
class CatShelter implements AnimalShelter
{
    // * return value tipe data cat (turunan dari class animal)
    function addopt(string $name): Cat
    {
        // * 
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

// * return value tipe data dog (turunan dari class animal)
class dogShelter implements AnimalShelter
{
    function addopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
