<?php

$data = [
    "FisrtName" => "prabu",
    "MiddleName" => "sili",
    "LastName" => "wangi"
];


// * membuat std class
// * mengubah array menjadi object
$object = (object) $data;

var_dump($object);

// * mengakses object std class
echo $object->FisrtName . PHP_EOL;
echo $object->MiddleName . PHP_EOL;
echo $object->LastName . PHP_EOL;

// * mengembalikan object menjadi array kembali  
$array = (array) $data;
var_dump($array);
