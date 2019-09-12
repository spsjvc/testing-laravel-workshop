<?php

namespace App\Services\ThirdParty;

class WeatherService
{
    public function getTemperature()
    {
        return random_int(50, 100);
    }

    public function getTemperatureByHour($hour)
    {
        return random_int(50, 100);
    }
}
