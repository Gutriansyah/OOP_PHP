<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


// * memanggil class pada namespace data
$conflict1 = new Data\One\Conflic();
$conflict2 = new Data\Two\Conflic();

// * memanggil function dan constand pada namespace helper
Helper\helpMe();
echo Helper\APPNAME;
