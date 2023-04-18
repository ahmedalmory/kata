<?php

namespace App;

class RomanNumerals
{
    const NUMERALS = [
        "M" => 1000,
        "CM" => 900,
        "D" => 500,
        "CD" => 400,
        "C" => 100,
        "XC" => 90,
        "L" => 50,
        "XL" => 40,
        "X" => 10,
        "IX" => 9,
        "V" => 5,
        "IV" => 4,
        "I" => 1,
    ];

    public static function generate($number): string|bool
    {

        if ($number <= 0 || $number > 3999) {
            return false; // Return false as a boolean value
        }

        $result = "";
        foreach (static::NUMERALS as $numeral => $arabic) {
            while ($number >= $arabic) {
                $result .= $numeral;
                $number -= $arabic;
            }
        }
        return $result;
    }
}
