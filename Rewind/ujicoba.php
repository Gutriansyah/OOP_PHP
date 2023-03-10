<?php

interface Hero
{
    function skill(string $param): string;
    function skin(int $argu): int;
}

interface Item
{
    function nama(string $nama): string;
}


trait NgetehAsu
{
    public string $ngeteh;

    public function getTeh(string $ngeteh)
    {
        echo "ini adalah teh : " . $ngeteh . PHP_EOL;
    }
}

class zilong implements Hero, Item
{

    public string $utlimate;
    public int $pasif;
    public string $nama;

    public function nama(string $nama): string
    {
        return $this->nama = $nama;
    }

    public function skill($param): string
    {
        return $this->utlimate = $param;
    }

    public function skin(int $argu): int
    {
        return $this->pasif = $argu;
    }

    use NgetehAsu;
}






$coba = new zilong();
$coba->getTeh("sosro");
$coba->ngeteh = "kotak";
echo $coba->ngeteh;
