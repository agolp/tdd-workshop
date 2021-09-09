<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PrimeFactorsTest extends TestCase
{
    public function test0()
    {
        $this->assertEquals([], PrimeFactors::generate(0));
    }

    public function test1()
    {
        $this->assertEquals([], PrimeFactors::generate(1));
    }

    public function test2()
    {
        $this->assertEquals([2], PrimeFactors::generate(2));
    }

    public function test3()
    {
        $this->assertEquals([3], PrimeFactors::generate(3));
    }

    public function test4()
    {
        $this->assertEquals([2, 2], PrimeFactors::generate(4));
    }

    public function test5()
    {
        $this->assertEquals([5], PrimeFactors::generate(5));
    }

    public function test6()
    {
        $this->assertEquals([2, 3], PrimeFactors::generate(6));
    }

    public function test7()
    {
        $this->assertEquals([7], PrimeFactors::generate(7));
    }

    public function test8()
    {
        $this->assertEquals([2, 2, 2], PrimeFactors::generate(8));
    }

    public function test9()
    {
        $this->assertEquals([3, 3], PrimeFactors::generate(9));
    }

    public function test125()
    {
        $this->assertEquals([5, 5, 5], PrimeFactors::generate(125));
    }

    public function test165()
    {
        $this->assertEquals([3, 5, 11], PrimeFactors::generate(165));
    }
}
