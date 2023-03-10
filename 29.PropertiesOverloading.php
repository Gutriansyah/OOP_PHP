<?php

// TODO DINAMIC PROPERTI
class Zero
{
    // ! dinamic property / properti overloading
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        return isset($this->properties[$name]);
    }

    // ! dinamic function / Function overloading
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo " call function " . $name . " with argument " . $join . PHP_EOL;
    }

    // * Dinamic static function
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo " call function " . $name . " with argument " . $join;
    }
}

// * membuat dinamic properti (nama dan valuenya)
$zero = new Zero();
$zero->satu = "siji";
$zero->dua = "loro";
$zero->tiga = "telu";

echo "pertama : " . $zero->satu . PHP_EOL;
echo "kedua : " . $zero->dua . PHP_EOL;
echo "ketiga : " . $zero->tiga . PHP_EOL;

// * memanggil dinamic function (nama dan parameternya)
$zero->dinamic(1, 3, 2, 1,);
Zero::dinamicStatic(2, 2, 22);
