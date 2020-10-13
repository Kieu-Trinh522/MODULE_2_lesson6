<?php

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        $this->name = $name;
        $this->width = $width;
    }

    public function resize($percent)
    {
        $this->width = $this->width + ($this->width * ($percent / 100));
    }

    public function getWidth1()
    {
        return $this->width;
    }

}