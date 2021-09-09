<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LeapYearTest extends TestCase
{
    public function test2016(): void
    {
        $this->assertEquals(true, LeapYear::isLeapYear(2016));
    }

    public function test2015(): void
    {
        $this->assertEquals(false, LeapYear::isLeapYear(2015));
    }

    public function test2100(): void
    {
        $this->assertFalse(LeapYear::isLeapYear(2100));
    }

    public function test2000(): void
    {
        $this->assertTrue(LeapYear::isLeapYear(2000));
    }
}
