<?php

class Kendaraan
{
    public string $nama;


    public function __construct($nama)
    {
        $this->nama = $nama;
    }
}

class Mobil extends Kendaraan
{
}

class Motor extends Kendaraan
{
}

class Mesin
{
    public Kendaraan $kendaraan;

    public function jenisKendaraan(Kendaraan $kendaraan)
    {
        echo " Ini adalah function polymorphism : " . $kendaraan->nama . PHP_EOL;
    }
}

function asd(Kendaraan $kendaraan)
{
    echo "ini properi dari : " . $kendaraan->nama . PHP_EOL;
}
