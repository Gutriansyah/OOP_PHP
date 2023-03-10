<?php
require_once "data/Shape.php";


$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rac = new Triangle();
echo $rac->getCorner() . PHP_EOL;
echo $rac->getParentCorner() . PHP_EOL;
