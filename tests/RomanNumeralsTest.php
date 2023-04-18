<?php


use App\RomanNumerals;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    #[Test] #[DataProvider('numerals')]
    function it_generates_roman_numerals($number, $expected): void
    {
        $result = RomanNumerals::generate($number);

        $this->assertEquals($expected, $result);
    }

    #[Test]
    function it_returns_false_if_zero_or_less(): void
    {
        $this->assertFalse(RomanNumerals::generate(0));
        $this->assertFalse(RomanNumerals::generate(-1));
    }

    #[Test]
    function it_returns_false_if_4000_or_more(): void
    {
        $this->assertFalse(RomanNumerals::generate(4000));
        $this->assertFalse(RomanNumerals::generate(5000));
    }

    static function numerals(): array
    {
        return [
            [1, "I"],
            [2, "II"],
            [3, "III"],
            [4, "IV"],
            [5, "V"],
            [6, "VI"],
            [7, "VII"],
            [8, "VIII"],
            [9, "IX"],
            [10, "X"],
            [11, 'XI'],
            [12, 'XII'],
            [13, 'XIII'],
            [14, 'XIV'],
            [15, 'XV'],
            [16, 'XVI'],
            [17, 'XVII'],
            [18, 'XVIII'],
            [19, 'XIX'],
            [20, 'XX'],
            [30, 'XXX'],
            [40, 'XL'],
            [50, 'L'],
            [60, 'LX'],
            [70, 'LXX'],
            [80, 'LXXX'],
            [90, 'XC'],
            [100, 'C'],
            [200, 'CC'],
            [300, 'CCC'],
            [400, 'CD'],
            [500, 'D'],
            [600, 'DC'],
            [700, 'DCC'],
            [800, 'DCCC'],
            [900, 'CM'],
            [1000, 'M'],
            [2000, 'MM'],
            [3000, 'MMM'],
            [3999, 'MMMCMXCIX']
        ];
    }
}
