<?php

namespace Jmusila\UnitConversions;

class Temparature
{
    private float $celsius;

    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.800000) + 32;
    }
}