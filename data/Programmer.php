<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

// * class polymorphism
class Company
{
    // * menggunakan type data programer dari class programer
    public Programmer $programmer;
}

// * function polymorphism
// * menggunakan parameter/argument type programer dari class programer
// ! parent x child true
// ! child x child false
function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        // * mengambil value/data property object type data programer dari class programer
        echo "hy Programerbackend " . $programmer->name . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "hy Programerfrontend " . $programmer->name . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "hy Programer " . $programmer->name . PHP_EOL;
    }
}
