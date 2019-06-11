<?php

namespace App\Services;

class MathService
{
    public function calculateHypotenuse($sideA, $sideB)
    {
        return sqrt(pow($sideA, 2) + pow($sideB, 2));
    }
}
