<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// * import class conflic pada namespace data
// ! tidak bisa import dua class yang namanya sama dari namespace yang berbeda
use Data\One\Conflic;

// * mengimport function dari namespace helper
use function Helper\helpMe;

// * mengimport constant dari namespace helper
use const Helper\APPNAME;


$conflict = new Conflic();
helpMe();
echo APPNAME . PHP_EOL;
