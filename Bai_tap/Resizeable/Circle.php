<?php

class Circle extends Shape
{
public $radius;

    public function __construct($radius,$name)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function resize($percent){
        $this->radius= $this->radius+($this->radius*($percent/100));
    }
    public function getRadius()
    {
        return $this->radius;
    }
}