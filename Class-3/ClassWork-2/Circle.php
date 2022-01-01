<?php
require_once("Shape.php");

class Circle extends Shape
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
        parent::__construct();

    }
    public function GetArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
    public function GetPerimeter()
    {
        return 2* 3.14 * $this->radius ;
    }
    public function DisplayInfo()
    {
        parent:: DisplayInfo();
        echo "Radius is $this->radius \n";
    }
}


?>