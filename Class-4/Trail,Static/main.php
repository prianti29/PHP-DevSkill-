<?php

require_once('JrStudent.php');



/*$obj1 = new Human();
$obj1->name = "Tamim";
// $obj1->age = 35;
$obj1->set_balance(104.5);

// echo "Balance is " . $obj1->get_balance();
// $obj1->bankBalance = 104.5;
$obj1->display();

$obj2 = new Human();
$obj2->name = "Shakib";
$obj2->age = 32;
// $obj1->bankBalance = 250.5;
$obj2->display();*/

$std1 = new Student();
$std1->name = "Sho";
$std1->DisplayBike();
//$std1->calculate_result(10);



Student::$country = "Bangladesh"; //static property set

$res = student::showStudent();  //calling static method

