<?php

namespace App\Src;

class PrimeFactor
{

    public function generate(int $num): array
    {

        $factors = [];
        $divisor = 2;

        while($num > 1) {
            while($num % $divisor === 0) {
                $factors[] = $divisor;
                $num = $num / $divisor;
            }
            $divisor++;
        }

        return $factors;
    }
}
