<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle = new Circle("Circle", 5, "blue");

echo $circle->toString() . "<br>";

$cylinder = new Cylinder("Cylinder", 10, "yeloow", 30);

echo $cylinder->toString();