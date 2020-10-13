<?php


class Circle extends Shape
{
public $radius;

    public function __construct($radius,$name)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function getArea(){
        return pi()*($this->radius*$this->radius);
    }
}