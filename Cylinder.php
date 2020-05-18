<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    protected $height;

    public function __construct($name, $radius, $color, $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }

    public function calculatorArea()
    {
        return parent::calculatorArea() * 2 + parent::calculatorPerimeter() * $this->height;
    }

    public function calculatorVolume()
    {
        return parent::calculatorArea() * $this->height;
    }

    public function toString()
    {
        return parent::toString() . " - Chieu cao: " . $this->height . " - The tich: " . $this->calculatorVolume();
    }
}