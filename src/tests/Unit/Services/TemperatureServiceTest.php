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

    /** @test */
    public function can_get_temperature_by_hour()
    {
        // Arrange
        //
        // ✏️ TODO:
        // Create a `WeatherService` mock with the `getTemperatureByHour` method.
        // Instantiate `TemperatureService` with the mock.
        //
        // 💡 HINT:
        // Use the `with` method on the mocked object to set the argument of the method call.

        // Act
        //
        // ✏️ TODO:
        // Retrieve the temperature for a given hour.

        // Assert
        //
        // ✏️ TODO:
        // Make an assertion that the retrieved temperature is as expected.
    }

    public function can_get_average_night_temperature()
    {
        // Arrange

        // Act

        // Assert
    }
}
