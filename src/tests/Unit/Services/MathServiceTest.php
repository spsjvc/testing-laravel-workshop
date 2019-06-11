<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\MathService;

class MathServiceTest extends TestCase
{
    /** @test */
    public function can_calculate_hypotenuse()
    {
        // Arrange
        $mathService = new MathService;

        // Act
        $result = $mathService->calculateHypotenuse(3, 4);

        // Assert
        $this->assertEquals(5, $result);
    }
}
