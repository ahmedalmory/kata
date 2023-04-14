<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     * @return void
     */
    public function it_generates_prime_factors($number, $expected)
    {
        $result = (new PrimeFactors())->generate($number);

        $this->assertEquals($expected, $result);
    }
  
    public static function factors()
    {
        return [
            [1,[]],
            [2,[2]],
            [3,[3]],
            [4,[2,2]],
            [5,[5]],
            [6,[2,3]],
            [7,[7]],
            [8,[2,2,2]],
            [9,[3,3]],
            [60060, [2,2,3,5,7,11,13]],
        ];
    }
}
