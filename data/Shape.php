<?php

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}


class Triangle extends Shape
{
    public function getCorner()
    {
        return 3;
    }

    public function getParentCorner()
    {
        return parent::getCorner();
    }
}
