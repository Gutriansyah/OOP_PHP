<?php

//* membuat class
class Person
{
    // * membuat propoerti/atribut 
    // * men-set type data atribut menjadi string
    // * membuat default value


    const AUTHOR = "Giri Gutriansyah";

    var string $name;
    var ?string $address = null;
    var string $country = "indonesia";

    // * sebuah constructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // * membuat function name
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo " HI, my name is " . $this->name  . PHP_EOL;
        } else {
            echo " HI " . $name . " my name is " . $this->name . PHP_EOL;
        }
    }

    function info()
    {
        echo self::AUTHOR . PHP_EOL;
    }


    // * membuat destructor
    function __destruct()
    {
        echo "Object Person $this->name Has Destroid " . PHP_EOL;
    }
}
