<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "2";
$student1->name = "Giri Gutriansyah";
$student1->value = 100;

$student2 = new Student();
$student2->id = "2";
$student2->name = "Giri Gutriansyah";
$student2->value = 100;

// * melakukan comparing object 
// todo equals
var_dump($student1 == $student2);
// todo identity
var_dump($student1 === $student2);
