<?php

declare(strict_types=1);

namespace App;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        $this->shapes();
        $this->extrude();
    
    }

    //Question One

    public function shapes()
    {
        echo "\n01) Shapes\n";

        // create new shapes
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // log the areas of each
        dump(
            $square->area(), // 16
            $circle->area(), // 50.265482457437
            $rectangle->area() // 20
        );
    }

    //Question Two

    public function extrude()
{
    echo "\n02) Extrude\n";

    // create 2D objects
    $square = new Shapes\Square(4);
    $circle = new Shapes\Circle(4);
    $rectangle = new Shapes\Rectangle(4, 5);

    // turn into 3D objects
    $cube = new Shapes\Extrude($square, 4);
    $cylinder = new Shapes\Extrude($circle, 4);
    $cuboid = new Shapes\Extrude($rectangle, 7);

    // log the volumes of each
    dump(
        $cube->volume(), // 64
        $cylinder->volume(), // 201.06192982975
        $cuboid->volume() // 140
    );

    try {
        new Shapes\Extrude($cube, 12); // shouldn't work
        dump("Accepted. Oops!"); // if you see this, something's not right
    } catch (\TypeError $e) {
        dump("Not accepted. Good work!"); // if you see this, you've done it right
    }
}
}