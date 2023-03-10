<?php

interface HelloWorld
{
    function sayHello(): void;
}

// class sample implements HelloWorld
// {
//     function sayHello(): void
//     {
//         echo "Hallo World";
//     }
// }

// * membuat anonymous class
$HelloWorld = new class("Giri Gutriansyah") implements HelloWorld
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo  "hallo dunia " . $this->name;
    }
};


$HelloWorld->sayHello();
