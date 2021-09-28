<?php

namespace Jmusila\UnitConversions\Tests;

use Jmusila\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /** @test */
    public function it_can_convert_kilograms_to_tons()
    {
        $tons = Weight::fromKilograms(100)->toTons();

        $this->assertEquals(0.1000000, $tons);
    }
}
