<?php

namespace Data;


// * membuat interface
interface HasBrand
{
    // * function pada interface
    // * abstract function
    function hasBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

// * Melakukan inheritace kepada sesama interface
interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

// * melakukan inheritance interface, (lebih dari satu interface)
class Avanza implements Car, IsMaintenance
{
    // * melakukan overidding function yang ada di interface parent
    public function drive(): void
    {
        echo " Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function hasBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
