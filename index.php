<?php
include_once "Shape/Shape.php";
include_once "Rectangle/Rectangle.php";
include_once "Rectangle/Square.php";
include_once "Circle/Circle.php";
include_once "Circle/Cylinder.php";

$circle = new Circle('Circle first', 4);
echo "Circle area: {$circle->calculateArea()} <br>";
echo "Circle perimeter: {$circle->calculatePerimeter()} <br>";