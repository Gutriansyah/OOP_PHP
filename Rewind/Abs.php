<?php

abstract class RoleHero
{
    public string $role;
}

class Fighter extends RoleHero
{
    public string $nameHero;
    public function __construct(string $nameHero)
    {
        $this->nameHero = $nameHero;
    }
}

class Mage extends RoleHero
{
}

$figter = new Fighter("zilong");
$figter->role = "mage";
// $figter->nameHero = "martis";
var_dump($figter);
