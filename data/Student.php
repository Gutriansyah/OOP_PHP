<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSampel(string $sampel)
    {
        $this->sample = $sampel;
    }

    // * membuat function clonne
    public function __clone()
    {
        unset($this->value);
    }
}
