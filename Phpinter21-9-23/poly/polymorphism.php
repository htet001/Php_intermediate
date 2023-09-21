<?php
require_once "vendor/autoload.php";

use polymorphism\Square;
use polymorphism\Circle;
use polymorphism\gen\Shape;

class polymorphism
{
    public function __construct()
    {
        $square = new Square(30, 50);
        echo "Area of Square is ==>" . $square->getArea();
        echo "<hr>";
        $circle = new Circle(25);
        echo "Area of Circle is ==>" . $circle->getArea();
        echo "<hr>";
        $this->getPrice($square);
        echo "<hr>";
        $this->getPrice($circle);
    }

    public function getPrice(Shape $shape)
    {
        $area = $shape->getArea();
        echo "Your Total Price is " . ($area * 20) . "Kyats";
    }
}
new polymorphism();