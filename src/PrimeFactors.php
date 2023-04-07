<?php

namespace App;

class PrimeFactors
{
    public function generate($number)
    {
        $factors = [];
        $divider = 2;

        while ($number > 1) {
            if ($number % $divider == 0) {
                $factors[] = $divider;
                $number /= $divider;
            }else{
                $divider++;
            }
        }
        return $factors;
    }
}
