<?php

namespace Jmusila\UnitConversions;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toTons(): float
    {
        return $this->kilograms / 1000.0;
    }
}
