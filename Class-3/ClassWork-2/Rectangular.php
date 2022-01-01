<?php

require_once ("Shape.php");

class Rectangular extends Shape
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
        parent::__construct();
    }
    public function GetArea()
    {
        return  $this->height * $this->width;
    }
    public function GetPerimeter()
    {
        return 2 * ($this->height + $this->width) ;
    }
    public function DisplayInfo()
    {
        parent:: DisplayInfo();
        echo "Radius is $this->height \n";
        echo "Radius is $this->width \n";
    }
}



?>