<?php

namespace App\Services\ThirdParty;

class AnotherWeatherService
{
    public function getTemperatureInFahrenheit()
    {
        return random_int(50, 100);
    }

    public function getTemperatureByHourInFahrenheit($hour)
    {
        return random_int(50, 100);
    }
}
