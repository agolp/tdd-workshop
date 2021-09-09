<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FibonacciTest extends TestCase
{
    public function testFib0(): void
    {
        $this->assertEquals(0, Fibonacci::compute(0));
    }

    public function testFib1(): void
    {
        $this->assertEquals(1, Fibonacci::compute(1));
    }

    public function testFib5(): void
    {
        $this->assertEquals(5, Fibonacci::compute(5));
    }
}
