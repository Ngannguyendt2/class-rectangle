<?php


class Rectangle
{
    protected $width;
    protected $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getArea()
    {
        return "Area of rectangle is " . ($this->width * $this->height) . "<br>";
    }

    function getPerimeter()
    {
        return "Perimater of rectangle is " . (($this->width + $this->height) * 2) . "<br>";
    }

    function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}