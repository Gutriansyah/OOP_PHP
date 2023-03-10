<?php

namespace Helper;

class MathHelper
{
    // * membuat static peoperti
    static public string $name = " Math Helper " . PHP_EOL;


    // * static function
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            // todo $total = $total + $number;
            $total += $number;
        }
        return $total;
    }
}
