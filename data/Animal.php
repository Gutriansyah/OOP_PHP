<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    // * membuat abstract function  
    abstract public function run(): void;

    // ! contravariance
    // * membuat fuction type data animalfood (child dari class food)
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{

    // * melakukan overidding parent function
    public function run(): void
    {
        echo $this->name . " is running " . PHP_EOL;
    }

    // ! contravariance
    public function eat(AnimalFood $animalFood): void
    {
        echo " cat is eating " . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo $this->name . " is running" . PHP_EOL;
    }

    // ! contravariance
    public function eat(Food $animalFood): void
    {
        echo " Dog Is eating " . PHP_EOL;
    }
}
