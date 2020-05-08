<?php

declare(strict_types=1);

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $width;
    private $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
        

    public function area() : float
    {
        
        return $this->width * $this->height;
    }

} 