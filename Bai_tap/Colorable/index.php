<?php
include_once "Colorable.php";
include_once "Shape.php";
include_once "Square.php";
include_once "Rectangle.php";
include_once "Circle.php";
$shape[0]=new Square("Square1",5,5);
$shape[1]=new Rectangle("Rectangle1",5,8);
$shape[3]=new Circle(6,"Circle1");
foreach ($shape as $item){
    if($item instanceof Colorable){
        echo $item->howToColor()."<br>";
    } else {
       echo $item->getArea()."<br>";
    }
}
