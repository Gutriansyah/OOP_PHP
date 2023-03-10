<?php



// * class parent
class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "HI " . $name . " my name is manager " . $this->name . PHP_EOL;
    }
}

// * child class dari manager
class VicePresident extends Manager
{
    // * melakukan overiddng pada construct
    public function __construct(string $name = "")
    {
        parent::__construct($name, "Vp");
    }

    // * melakukan overridding pada function sayHello yang ada di class parent
    function sayHello(string $name): void
    {
        echo "HI " . $name . " my name vp " . $this->name . PHP_EOL;
    }
}
