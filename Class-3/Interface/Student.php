<?php

//for inheritance
require_once('Human.php');
class Student extends Human implements IStudent,IHuman{   //interface er jonno implement keyword use korte hoy
    public $roll_no;
    public $cgpa;
    const UNI_NAME = "PCIU";

    public function __construct(){
        $this->cgpa = 2.3;
        parent::__construct();
    }
    //override
    public function display(){
        echo"Cgpa is $this->cgpa <br>";
        echo"Roll is $this->roll_no <br>";
      
        echo"Uni name is ".self::UNI_NAME."<br>";

        parent::display();

    }
    //for abstract method
    public function calculator_result(): bool
    {
        echo "calculate result is called <br>";
        return true;
    }
    public function get_result(){
        echo "Get result is called <br>";

    }
    public function get_cgpa() :float{
        echo "Get CGPA is called <br>";
        return true;
    }
    public function get_info()
    {
        echo "Get INFO is called <br>";
    }
}

?>