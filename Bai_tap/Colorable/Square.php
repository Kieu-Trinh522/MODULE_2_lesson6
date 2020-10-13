<?php
include_once "Colorable.php";


class Square extends Shape implements Colorable
{
    public $width;
    public function __construct($name,$width)
    {
        parent::__construct($name);
        $this->width=$width;
    }

    public function howToColor()
    {
        return "Color all four sides..";

    }
}