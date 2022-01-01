<?php

namespace controller;


class student
{
    public $name;
    public $age;
    public static $country;

    public function display()
    {
        echo "name is $this->name \n";
        echo "age is $this->age \n";
        echo "country ".self::$country." \n"; 
    }
    public static function show(){
        echo "OK \n";
    }
}

?>