<?php

namespace Tests\Unit\Services;

use Mockery;
use Tests\TestCase;
use App\Services\TemperatureService;
use App\Services\ThirdParty\WeatherService;

class TemperatureServiceTest extends TestCase
{
    /** @test */
    public function can_get_temperature()
    {
        // Arrange
        $weatherServiceMock = Mockery::mock(WeatherService::class);
        $weatherServiceMock->shouldReceive('getTemperature')
            ->once()
            ->andReturn(60);

        $temperatureService = new TemperatureService(
            $weatherServiceMock
        );

        // Act
        $result = $temperatureService->getTemperature();

        // Assert
        $this->assertEquals(15.4, $result);
    }
}
