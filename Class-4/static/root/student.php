<?php

namespace root; //ekoi function name onek gulo te thakle

class student
{
    /*
    public $name;
    public $age;
    public static $country;


    public function display()
    {
        echo "name is $this->name \n";
        echo "age is $this->age \n";
        echo "country ".self::$country." \n";  //for stactic property
    }
    public static function show()
    {
        echo "name is".self::$name." \n";
        echo "age is ".self::$age." \n";
        echo "country ".self::$country." \n";  //for stactic property
    }
    */


    public $roll_number;
    public $cgpa;

    public function display()
    {
        echo "Roll Number is $this->roll_number \n";
        echo "Cgpa is $this->cgpa \n";
    }
}

?>