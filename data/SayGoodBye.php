<?php

namespace Data\Traits;

use A;

// * membuat Trait
trait SayGoodBye
{
    public string $name;

    // * membuat function pada trait
    public function goodBye(string $name): void
    {
        if (is_null($name)) {
            echo "Salamat Tinggal" . PHP_EOL;
        } else {
            echo " Selamat tinggal " . $name . PHP_EOL;
        }
    }
}

trait SayHello
{
    public string $name;

    public function hello(string $name): void
    {
        if (is_null($name)) {
            echo "selamat datang " . PHP_EOL;
        } else {
            echo " Selamat Datang " . $name . PHP_EOL;
        }
    }
}

// * membuat properti pada trait yang akan di gunakan didalam kelas person
trait HasName
{
    public string $name;
}

// * membuat abstract function trait
trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{

    public function goodBye(string $name): void
    {
        echo " selamat tinggal dari class parent" . PHP_EOL;
    }

    public function hello(string $name): void
    {
        echo " selamat datang dari class parent" . PHP_EOL;
    }
}


// melakukan inheritace pada trait;
trait All
{
    // * memanggil atau menggunakan trait
    use SayHello, SayGoodBye, HasName, CanRun {
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    // * memanggil atau menggunakan trait
    use All;

    // todo wajib 
    // * meng overriding abstart funtion dati trait parent
    public function run(): void
    {
        echo " Person " . $this->name . " is Running " . PHP_EOL;
    }

    public function goodBye(string $name): void
    {
        echo " selamat tinggal dari class person" . PHP_EOL;
    }

    public function hello(string $name): void
    {
        echo " selamat datang dari class person " . PHP_EOL;
    }
}
