<?php

declare(strict_types=1);

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $sidelength;

    public function __construct($sidelength)
    {
        $this->sidelength = $sidelength;
    }
        

    public function area() : float
    {
        
        return $this->sidelength * $this->sidelength;
    }

} 