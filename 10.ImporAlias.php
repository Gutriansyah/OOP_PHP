<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


// * menggunakan alias (as) untuk merubah nama 

// * import class conflic pada namespace data dan merubah nama class mengunakan as
use Data\One\Conflic as Conflic1;
use Data\Two\Conflic as Conflic2;

// * mengimport function dari namespace helper dan mengubah namnya menjadi tolongSaya
use function Helper\helpMe as tolongSaya;

// * mengimport constant dari namespace helper dan mengubahnya menjadi NAMASAYA
use const Helper\APPNAME as NAMASAYA;


$conflict1 = new Conflic1();
$conflict2 = new Conflic2();
tolongSaya();
echo NAMASAYA . PHP_EOL;
