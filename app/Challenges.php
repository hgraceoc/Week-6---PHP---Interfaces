<?php

declare(strict_types=1);

namespace App\Shapes;

class Challenges 
{
    public function start()
    {
        echo "\nChallenges\n";

    }
}

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