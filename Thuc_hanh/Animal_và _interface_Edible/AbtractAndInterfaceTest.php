<?php
include_once "Tiger.php";
include_once "Chicken.php";
include_once "Orange.php";
include_once "Apple.php";

$animal[0]=new Tiger();
$animal[1]=new Chicken();

foreach ($animal as $item){
    echo $item->makeSound()."<br>";
    if ($item instanceof Chicken){
        echo $item->howToEat()." "."<br>";
    }

}
$fruit[0]=new Orange();
$fruit[1]=new Apple();
foreach ($fruit as $value){
    echo $value->howToEat()."<br>";
}