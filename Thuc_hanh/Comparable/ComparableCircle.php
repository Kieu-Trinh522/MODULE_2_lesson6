<?php
include_once "Circlee.php";
include_once "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();
        if ($circleOtherRadius > $this->radius) {
            return "bigger";
        }
        if ($circleOtherRadius < $this->radius) {
            return "lower";
        }
    }
}