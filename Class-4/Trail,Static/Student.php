<?php

//for inheritance
require_once('Human.php');
require_once('IStudent.php');
require_once('IHuman.php');
require_once('Bike.php');
require_once('B.php');
class Student extends Human implements IStudent, IHuman {
//Calling Trait B and Bike

    use Bike,B;
    public $roll_no;
    public $cgpa;
    const UNI_NAME = "PCIU";

    //static property
    public static $country;

    
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
    public function calculator_result($x)
    {
        echo "calculate result is called <br>";
        return 1;
    }
    public function get_result($sub): int
    {
        echo "Get Result is called <br>";
        return 0;
    }
    public function get_cgpa(): float
    {
        echo "Get Cgpa is called <br>";
        return 1;
    }
    
    public function get_info()
    {
        echo "Get info is called <br>";
    }

    //For static 

    //static kono object er maddome call kora jay na, class er maddhome call korte hoy 

    public static function showStudent()
    {
        echo "Show student is called";
    }
}

?>