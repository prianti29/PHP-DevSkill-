<?php
require_once ('Rectangular.php');

class Square extends Rectangular
{
    public function __construct($side)
    {
        parent:: __construct($side,$side);
    }
    public function DisplayInfo()
    {
        Shape:: DisplayInfo();
        echo "Side is $this->width \n";
    }
}

?>