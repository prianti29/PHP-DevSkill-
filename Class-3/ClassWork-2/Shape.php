<?php
abstract class Shape
{
    private $color;

    public function __construct()
    {
        $this->color = "red";
    }
    public function DisplayInfo()
    {
        echo "Area is {$this->GetArea()} \n";
        echo "Perimeter is {$this->GetPerimeter()} \n";
        echo "Color is $this->color \n";

    }
  abstract public function GetArea();
  abstract public function GetPerimeter();
}
?>