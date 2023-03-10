<?php


class NamaClass
{


    protected string $properti1 = "defaul1";
    protected string $properti2 = "default2";
    protected string $properti3 = "default3";

    const OWNER = "Giri Gutriansyah";


    public function __construct(?string $param1, string $param2, string $param3)
    {
        $this->properti1 = $param1;
        $this->properti2 = $param2;
        $this->properti3 = $param3;
    }

    public function namaSaya(string $nama)
    {
        echo "ini dari paramater : " . $nama . PHP_EOL;
        echo "ini dari properti : " . $this->properti1 . PHP_EOL;
    }

    public function info()
    {
        echo NamaClass::OWNER;
    }

    public function __destruct()
    {
    }
}

class Child extends NamaClass
{

    public function namaSaya(string $nama)
    {
        echo "Ini adalah function overridding" . PHP_EOL;
        echo "ini dari paramater : " . $nama . PHP_EOL;
        echo "ini dari properti : " . $this->properti1 . PHP_EOL;
    }

    public function getPropeerty()
    {
        echo $this->properti1 . PHP_EOL;
        echo $this->properti2 . PHP_EOL;
        echo $this->properti3 . PHP_EOL;
    }

    public function getParent()
    {
    }
}
