<?php

namespace Data;

// * membuat abstract class
abstract class Location
{
    public string $name;
}

// * membuat child dari abstract class
class City extends Location
{
}

class Distric extends Location
{
}
