<?php
require_once ('Cylinder.php');
require_once('Square.php');

$c1 = new Circle(2);
$c1->DisplayInfo();

$c2 = new Cylinder(1,3);
$c2->DisplayInfo();

$c3 = new Rectangular(2,7);
$c3->DisplayInfo();

$c4 = new Square(2);
$c4->DisplayInfo();


?>