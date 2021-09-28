<?php

namespace Jmusila\UnitConversions\Tests;

use Jmusila\UnitConversions\Temparature;
use PHPUnit\Framework\TestCase;

class TemparatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_degree_celsius_to_fahrenheit()
    {
        $fahrenheit = Temparature::fromCelsius(10)->toFahrenheit();

        $this->assertEquals(50.00000, $fahrenheit);
    }
}
