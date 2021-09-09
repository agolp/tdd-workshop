<?php declare(strict_types=1);

class Fibonacci
{
    public static function compute(int $n)
    {
        if ($n === 0 || $n === 1) {
            return $n;
        }

        return self::compute($n - 1) + self::compute($n - 2);
    }
}
