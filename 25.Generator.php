<?php

// * membuat iterator
function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}


foreach (getGenap(30) as $value) {
    echo "genap = " . $value . PHP_EOL;
}

echo PHP_EOL;

// * membuat iterator menggunakan generator yield
function getGanjil(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(30) as $value) {
    echo "ganjil = " . $value . PHP_EOL;
}
