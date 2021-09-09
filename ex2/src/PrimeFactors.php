<?php declare(strict_types=1);

class PrimeFactors
{
    public static function generate(int $n): array
    {
        $primes = [];

        for ($potentialDivider = 2; $potentialDivider <= $n; ++$potentialDivider) {
            while ($n % $potentialDivider === 0) {
                $primes[] = $potentialDivider; 
                $n /= $potentialDivider;
            }
        }

        return $primes;
    }
}
