<?php

require_once "data/Student.php";

$student = new Student();
$student->id = "10";
$student->name = "Giri Gutriansyah";
$student->value = 69;
$test = $student->setSampel("Data sampel");
var_dump($student);


// * melakukan object clonne pada $student
// ! mengclonne semua properti termasuk property pirvate
$student2 = clone $student;
//* menggunakan function clone untuk memilih property apa saja yang akan di clone
$student2->__clone();
var_dump($student2);
