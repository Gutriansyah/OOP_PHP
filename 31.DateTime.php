<?php

// * memanggil class DateTime bawaan php
$time = new DateTime();
// * melakukan seting time zone
$time->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($time);

// * menggunakan funcion dari class DateTime

$time->setTime(12, 12, 12);
$time->setDate(2026, 12, 20);

// * menambahkan waktu satu tahun 
$time->add(new DateInterval("P1Y"));

// * mengurangi waktu satu bulan
$minusSatuBulan = new DateInterval("P1M");
$minusSatuBulan->invert = true;
$time->add($minusSatuBulan);

var_dump($time);

// * mengatur format tanggal yanf akan di tampilkan 
$timeNow = new DateTime();
$string = $timeNow->format("Y-m-d H:i:s");
echo $string;


$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
