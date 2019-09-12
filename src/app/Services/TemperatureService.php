<?php

namespace App\Services;

use App\Services\ThirdParty\WeatherService;

class TemperatureService
{
    private $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getTemperature()
    {
        $temperatureInFahrenheit = $this->weatherService->getTemperature();
        return ($temperatureInFahrenheit - 32) * 0.55;
    }
}
