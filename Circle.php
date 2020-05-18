<?php


class Circle
{
    protected $name;
    protected $radius;
    protected $color;

    public function __construct($name, $radius, $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calculatorArea(){
        return pi() * pow ($this->radius , 2);
    }

    public function calculatorPerimeter(){
        return 2 * pi() * $this->radius;
    }

    public function toString(){
        return "Day la : " . $this->getName() . " - Ban kinh: " . $this->getRadius() . " - Mau: " . $this->getColor() . " - Dien tich: " .$this->calculatorArea();
    }
}