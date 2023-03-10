<?php


class Category
{
    private string $name;
    private bool $expensive;


    // TODO membuat setter getter type data selain boolean
    // * membuat function getter untuk mengambil data
    public function getName(): string
    {
        return $this->name;
    }

    // * function setter untuk mengubah data
    public function setName(string $name): void
    {
        // * melakukan validasi saat mengubah data
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    // TODO membuat setter getter untuk type data bolean
    // * getter
    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    // * setter
    public function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
}
