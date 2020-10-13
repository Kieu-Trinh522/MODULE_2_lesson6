<?php


class Rectangle extends Shape
{
    public $height;
    public $width;


    public function __construct($name,$height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }
    public function getArea(){
        return  $this->height*$this->width;
    }

}