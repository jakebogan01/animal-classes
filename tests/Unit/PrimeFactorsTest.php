<?php

namespace Tests\Unit;

use App\Src\PrimeFactor;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * A basic unit test example.
     * @dataProvider factors
     * @return void
     *
     */
    public function testItGeneratesPrimeNumbersForAllFactors($number, $result)
    {
        $factors = new PrimeFactor();
        $this->assertEquals($result, $factors->generate($number));
    }

    public function factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2,2]],
            [5, [5]],
            [6, [2,3]],
            [7, [7]],
            [256, [2,2,2,2,2,2,2,2]],
            [304, [2,2,2,2,19]],
            [1024, [2,2,2,2,2,2,2,2,2,2]],
        ];
    }
}
