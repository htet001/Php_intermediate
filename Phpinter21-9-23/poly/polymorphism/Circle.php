<?php

namespace polymorphism;

use polymorphism\gen\Shape;

class Circle implements Shape
{
    private $radious;
    public function __construct($radious)
    {
        $this->radious = $radious;
    }
    public function getArea()
    {
        return $this->radious * $this->radious * pi();
    }
}