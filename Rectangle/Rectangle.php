<?php

use JetBrains\PhpStorm\Pure;

class Rectangle extends Shape
{
    public int|float $width;
    public int|float $height;

    #[Pure] public function __construct(string $name,
                                        int|float $width,
                                        int|float $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int {
        return ($this->height + $this->width) * 2;
    }
}