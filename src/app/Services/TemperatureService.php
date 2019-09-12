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
        return $this->toCelsius(
            $this->weatherService->getTemperature()
        );
    }

    public function getTemperatureByHour($hour)
    {
        return $this->toCelsius(
            $this->weatherService->getTemperatureByHour($hour)
        );
    }

    public function toCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 0.55;
    }
}
