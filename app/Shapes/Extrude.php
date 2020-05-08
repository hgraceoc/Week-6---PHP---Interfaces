<?php

declare(strict_types=1);

namespace App\Shapes;

class Extrude 
//implements ShapeInterface - although this is used in the shape class, it is not used in the extrude class as they are two separate classes and have different rules
{
    private $depth;
    private $shape;

    public function __construct(ShapeInterface $shape, $depth)
    //using the shape interface class on shape parameter, rather than the whole function itself - so the shape in run through that class
    {
        $this->depth = $depth;
        $this->shape = $shape;    
    }

    public function volume()
    {
        return $this->shape->area() * $this->depth;
        //calling the area function within the shape class, which we accepted above to times that by depth, which exists in this class but is not influenced by the shape class specifications or functions
    }

} 

// Create an Extrude class in the App\Shapes namespace. On construction it should take a class that implements ShapeInterface as well as a depth. It should have a volume() method which returns the volume (area × depth) of the given shape. Make sure you use type-hinting to make sure you can't pass non-shapes into Extrude.