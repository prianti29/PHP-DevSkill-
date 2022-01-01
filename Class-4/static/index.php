<?php
require_once("controller/StudentController.php");
require_once("root/student.php");

//function name ekoi tai namespace diye alada kore dise and tar calling use keyword diye
use controller\student;
use root\student as RootStudent;

student::$country = "Bangladesh"; //jeheto sob obj use hobe tai 1st e decleare kora jay

$s1 = new student();
$s1->name = "jamal";
$s1->age = 21;
// $s1->country = "bangladesh";    //static value doesn't call like this
// $s1->display();
student::show();

$s2 = new student();
$s2->name = "kamal";
$s2->age = 25;
// student::$country = "Bangladesh";
//$s2->display();  //ekhane amra country r jonno call kori nai kintu show korbe karon er age static decleare kore disi
student::show();


$news1 = new RootStudent();
$news1->roll_number = "67";
$news1->cgpa = 3.25;
$news1->display();




//static use kore jokhon ekta value onek gulo obj e use korte hoy,tahole bar bar sob obj oi value decleare korte hoy na


?>