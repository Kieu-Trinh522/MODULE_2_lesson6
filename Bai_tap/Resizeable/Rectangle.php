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
    public function resize($percent){
        $this->height= $this->height+($this->height*($percent/100));
        $this->width= $this->width+($this->width*($percent/100));

    }
    public function getHeight(){
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }
}