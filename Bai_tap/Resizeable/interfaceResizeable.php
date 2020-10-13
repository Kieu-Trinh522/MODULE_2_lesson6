<?php
include_once "Shape.php";
include_once "Resizeable.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
$circle=new Circle(5,"Circle1");
$circle->resize(20);
echo $circle->getRadius()."<br>";
$rectangle= new Rectangle("Rectangle1",7,5);
$rectangle->resize(50);
echo $rectangle->getHeight()."<br>";
echo $rectangle->getWidth()."<br>";
$square=new Square("Square1",6,6);
$square->resize(30);
echo $square->getWidth1();


