<?php

use Helper\MathHelper;

require_once "helper/MathHelper.php";

$mathhelper = new MathHelper();

// * mengakses static properti
echo MathHelper::$name;

// * mengubah value static properti
MathHelper::$name = " Giri Gutriansyah ";
echo MathHelper::$name . PHP_EOL;

// * mengakses static function
$total = MathHelper::sum(10, 10, 10, 10);
echo $total . PHP_EOL;
