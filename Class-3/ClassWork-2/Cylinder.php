<?php
require_once ('Circle.php');

class Cylinder extends Circle
{
    private $height;

    public function __construct($height,$radius)
    {
        $this->height = $height; 
        parent::__construct($radius);
        
    }
    public function GetArea()
    {
        return 2 * 3.14 * $this->radius * ($this->height + $this->radius);
    }
    public function DisplayInfo()
    {
        parent:: DisplayInfo();
        echo "Height is $this->height \n";
    }

}


?>