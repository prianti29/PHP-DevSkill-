<?php

//------------------>
 //for inderitance
 //---------------->
/*
require_once('Student.php');
$std1 = new Student();
$std1->display();
*/

//another file that inherited from Student.php

/*
require_once("JrStudent.php");

$std1 = new JrStudent();
$std1->display();
*/

//for abstract method
require_once("Student.php");

$std1 = new Student();
$std1->calculator_result();

?>